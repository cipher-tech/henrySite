<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $users = User::paginate(10);

        return view('admin.index', compact('users', "user"));
    }
    public function ViewUser($id)
    {
        $user = User::whereId($id)->firstOrFail();
        $message = '';
        return view('admin.viewUser', compact('user', "message"));
    }
    public function storeUser(Request $request)
    {
        Validator::make($request->all(), [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            "username" => ['required', 'string', "max:255"],
            "phone_no" => ['required', 'string', 'max:255'],
            "country" => ['required', 'string', 'max:255'],
            "wallet_balance" => ['required', 'string', 'max:255'],
            "invested" => ['required', 'string', 'max:255'],
            "stock_starts" => ['string', 'max:255'],
        ])->validate();

        $user = User::whereId($request->id)->firstOrFail();

        $user->full_name = $request['full_name'];
        $user->email = $request['email'];
        $user->username = $request['username'];
        $user->phone_no = $request['phone_no'];
        $user->country = $request['country'];
        $user->wallet_balance = $request['wallet_balance'];
        $user->invested = $request['invested'];
        $user->stock_starts = $request['stock_starts'];

        $user->save();

        $message = "User Updated";
        return view('admin.viewUser', compact('user', 'message'));
    }

    public function getDeposits()
    {
        $deposits = Deposit::paginate(10);
        $user = Auth::user();
        return view('admin.fund', compact('deposits', "user"));
    }

    public function getWithdrawals()
    {
        $Withdrawals = Withdrawal::paginate(10);
        $user = Auth::user();
        return view('admin.withdraw', compact('Withdrawals', "user"));
    }
}
