<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
{
    public function affiliate_all() {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('admin.affiliate.index', compact('users'));
    }

    public function index() {
        $users = User::where('affiliate_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('admin.affiliate.affiliate', compact('users'));
    }

    public function teacher_index() {
        $users = User::where('affiliate_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('teacher.affiliate.affiliate', compact('users'));
    }

    public function user_index() {
        $users = User::where('affiliate_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        return view('user.affiliate.affiliate', compact('users'));
    }
}
