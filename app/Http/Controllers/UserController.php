<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::query()
            ->select(['id','name','email','created_at'])
            ->latest()
            ->paginate(10);

        return view('users.index', compact('users'));
    }
}
