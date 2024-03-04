<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccounts;

class UserAccountsController extends Controller
{
    public function index()
    {
        return UserAccounts::all();
    }

    public function show(UserAccounts $user_account)
    {
        return $user_account;
    }

    public function search(Request $request)
    {
        $id_number = $request->query('id_number');
        $full_name = $request->query('full_name');
        $role = $request->query('role');

        $user_accounts = UserAccounts::where([]);

        if (isset($id_number)) {
            $user_accounts->where('id_number', 'like', $id_number . '%');
        }

        if (isset($full_name)) {
            $user_accounts->where('full_name', 'like', $full_name . '%');
        }

        if (isset($role)) {
            $user_accounts->where('role', $role);
        }

        return $user_accounts->get();
    }

    public function store(Request $request)
    {
        $user_account = UserAccounts::create($request->all());

        return response()->json($user_account, 201);
    }

    public function update(Request $request, UserAccounts $user_account)
    {
        $user_account->update($request->all());

        return response()->json($user_account, 200);
    }

    public function delete(UserAccounts $user_account)
    {
        $user_account->delete();

        return response()->json(null, 204);
    }
}
