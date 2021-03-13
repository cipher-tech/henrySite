<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Notifications\RegisterNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "username" => ['required', 'string',"max:255"],
            "phone_no" => ['required', 'string','max:255'],
            "country" => ['required', 'string','max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $data = [
            "full_name" => $input['full_name'],
            "username" => $input['username'],
        ];
        $user = User::create([
            'full_name' => $input['full_name'],
            'email' => $input['email'],
            'username' => $input['username'],
            'phone_no' => $input['phone_no'],
            'country' => $input['country'],
            "role" => "user",
            'password' => Hash::make($input['password']),
        ]);
        
        if ($user->save()) { 
            $user->notify(new RegisterNotification($data));
        } 

        return $user;
        
    }
}
