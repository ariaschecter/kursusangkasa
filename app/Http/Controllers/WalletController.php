<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index() {
        $wallet = Wallet::with('wallet_history')->findOrFail(Auth::id());
        return view('admin.wallet.index', compact('wallet'));
    }

    public function update(Request $request, Wallet $wallet) {
        $validated = $request->validate([
            'wallet_method' => 'required',
            'wallet_name' => 'required',
            'wallet_rekening' => 'required'
        ]);

        $wallet->update($validated);

        $notification = [
            'message' => 'Wallet Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
