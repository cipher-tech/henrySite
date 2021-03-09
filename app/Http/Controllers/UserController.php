<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->user();
        return view('dashboard.dashboard', compact("user"));
    }

    public function deposit()
    {
        $user = Auth()->user();
        $deposits = $user->deposits;
        $message = '';
        return view('dashboard.fund', compact("user", "message", 'deposits'));
    }
    public function storeDeposit(Request $request)
    {
        $user = Auth()->user();
        Validator::make($request->all(), [
            'amount' => ['required', 'integer', 'min:500'],
            'email' => ['required', 'string', 'email', 'max:255'],
            "username" => ['required', 'string', "max:255"],
            "transaction_id" => ['required', 'string', 'max:255'],
        ])->validate();

        if ($deposit = Deposit::create([
            "user_id" => $user->id,
            "email" => $user->email,
            "username" => $user->username,
            "transaction_id" => $request->transaction_id,
            "amount" => $request->amount,
            "status" => "pending",
            "coin_address" => $request->coin_address ? $request->coin_address : null,
        ])) {
            $message = "Request Successful";
        }
        return view('dashboard.fund', compact("user", "message"));
    }

    public function withdrawal()
    {
        $user = Auth()->user();
        $withdrawals = $user->withdrawals;

        $message = '';
        return view('dashboard.withdraw', compact("user", "message", 'withdrawals'));
    }

    public function storeWithdrawal(Request $request)
    {
        $user = Auth()->user();
        Validator::make($request->all(), [
            'amount' => ['required', 'integer', 'min:500'],
            "type" => ['required', 'string', "max:255"],
            "coin_address" => ['required', 'string', "max:255"],
        ])->validate();

        if ($withdrawal = Withdrawal::create([
            "user_id" => $user->id,
            "email" => $user->email,
            "username" => $user->username,
            "type" => $request->type,
            "amount" => $request->amount,
            "transaction_id" => mt_rand(0, 4488888),
            "status" => "pending",
            "coin_address" => $request->coin_address ? $request->coin_address : null,
        ])) {
            $withdrawals = $user->withdrawals;
            $message = "Request Successful";
        }
        return view('dashboard.withdraw', compact("user", "message", 'withdrawals'));
    }

    public function profile()
    {
        $user = Auth()->user();
        return view('dashboard.profile', compact("user"));
    }
}

/* foreach ($errors->all() as $message) {
    //
} */
