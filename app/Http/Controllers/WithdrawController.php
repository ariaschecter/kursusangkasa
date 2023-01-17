<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\WalletHistory;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index() {
        $wallet_histories = WalletHistory::orderBy('wallet_history_status', 'ASC')->orderBy('created_at', 'ASC')->get();
        return view('admin.withdraw.index', compact('wallet_histories'));
    }

    public function edit(WalletHistory $wallet_history) {
        $history = WalletHistory::with('wallet')->findOrFail($wallet_history->id);
        return view('admin.withdraw.edit', compact('history'));
    }

    public function Update(Request $request, WalletHistory $wallet_history) {
        $status = $request->wallet_history_status;
        $wallet_amount = $wallet_history->wallet->wallet_amount;
        $request->validate([
            'wallet_history_status' => 'required',
        ]);

        if ($status == 'WRONG') {
            $wallet_history->update([
                'wallet_history_status' => 'WRONG',
            ]);

            Wallet::findOrFail($wallet_history->wallet_id)->update([
                'wallet_amount' => $wallet_amount + $wallet_history->wallet_history_money * -1,
            ]);

            WalletHistory::create([
                'wallet_id' => $wallet_history->wallet_id,
                'wallet_history_desc' => 'Wrong Wallet Method',
                'wallet_history_money' => $wallet_history->wallet_history_money * -1,
                'wallet_history_status' => 'SUCCESS',
            ]);
        } else if ($status == 'SUCCESS') {
            $wallet_history->update([
                'wallet_history_status' => 'SUCCESS',
            ]);
        }
        $notification = [
            'message' => 'Withdraw Data Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.withdraw.index')->with($notification);
    }
}
