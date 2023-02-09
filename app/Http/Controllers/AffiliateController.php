<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
{
    public function affiliate_all() {
        $users = User::orderBy('created_at', 'DESC')->get();
        $title = 'All Affiliate';
        return view('admin.affiliate.index', compact('users', 'title'));
    }

    public function index() {
        $users = User::where('affiliate_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        $title = 'My Affiliate';
        return view('admin.affiliate.affiliate', compact('users', 'title'));
    }

    public function user_index() {
        $users = User::where('affiliate_id', Auth::id())->orderBy('created_at', 'DESC')->get();
        $title = 'My Affiliate';
        return view('user.affiliate.affiliate', compact('users', 'title'));
    }
}
