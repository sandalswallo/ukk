<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use App\Models\Outlet;


class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        $member = Member::all();
        $outlet = Outlet::all();
        return view('dashboard', compact('user','member','outlet'));
    }
}
