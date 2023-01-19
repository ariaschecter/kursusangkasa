<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class WalletController extends Controller
{
    public function index() {
        $wallet = Wallet::with('wallet_history')->findOrFail(Auth::id());

        if (!$wallet->wallet_method) {
            return redirect()->route('admin.wallet.method');
        }
        $setting = Setting::first();
        $inout = WalletHistory::where('wallet_id', Auth::id())->get('wallet_history_money');
        $in = 0; $out = 0;
        foreach ($inout as $history) {
            $money = $history->wallet_history_money;
            if ($money >= 0) {
                $in += $money;
            } else {
                $out += $money * -1;
            }
        }

        $affiliate = count(User::where('affiliate_id', Auth::id())->get());
        return view('admin.wallet.index', compact('wallet', 'setting', 'in', 'out', 'affiliate'));
    }

    public function method() {
        $wallet = Wallet::findOrFail(Auth::id());
        return view('admin.wallet.method', compact('wallet'));
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
        return redirect()->route('admin.wallet.index')->with($notification);
    }

    public function withdraw() {
        $setting = Setting::first();
        $wallet = Wallet::findOrFail(Auth::id());
        if ($wallet->wallet_amount < $setting->min_withdraw) {
            $notification = [
                'message' => 'Minimal Withdraw Not Reached',
                'alert-type' => 'error',
            ];
            return redirect()->back()->with($notification);
        }

        return view('admin.wallet.withdraw', compact('wallet'));
    }

    public function withdraw_store(Request $request) {
        $setting = Setting::first();
        $wallet = Wallet::findOrFail(Auth::id());
        $request->validate([
            'input_withdraw' => 'required|gte:'. $setting->min_withdraw . '|lte:' . $wallet->wallet_amount,
        ]);

        $wallet_update = [
            'wallet_amount' => $wallet->wallet_amount - $request->input_withdraw,
        ];

        $validated = [
            'id' => Str::random(10),
            'wallet_id' => $wallet->id,
            'wallet_history_desc' => 'Withdraw Money',
            'wallet_history_money' => -$request->input_withdraw,
            'wallet_history_status' => 'PENDING',
        ];

        Wallet::where('id', Auth::id())->update($wallet_update);
        WalletHistory::create($validated);

        $notification = [
            'message' => 'Wallet Withdraw Successfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('admin.wallet.index')->with($notification);
    }

    public function teacher_index() {
        $wallet = Wallet::with('wallet_history')->findOrFail(Auth::id());

        if (!$wallet->wallet_method) {
            return redirect()->route('teacher.wallet.method');
        }
        $setting = Setting::first();
        $inout = WalletHistory::where('wallet_id', Auth::id())->get('wallet_history_money');
        $in = 0; $out = 0;
        foreach ($inout as $history) {
            $money = $history->wallet_history_money;
            if ($money >= 0) {
                $in += $money;
            } else {
                $out += $money * -1;
            }
        }

        $affiliate = count(User::where('affiliate_id', Auth::id())->get());
        return view('teacher.wallet.index', compact('wallet', 'setting', 'in', 'out', 'affiliate'));
    }

    public function teacher_method() {
        $wallet = Wallet::findOrFail(Auth::id());
        return view('teacher.wallet.method', compact('wallet'));
    }

    public function teacher_update(Request $request, Wallet $wallet) {
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
        return redirect()->route('teacher.wallet.index')->with($notification);
    }

    public function teacher_withdraw() {
        $setting = Setting::first();
        $wallet = Wallet::findOrFail(Auth::id());
        if ($wallet->wallet_amount < $setting->min_withdraw) {
            $notification = [
                'message' => 'Minimal Withdraw Not Reached',
                'alert-type' => 'error',
            ];
            return redirect()->back()->with($notification);
        }

        return view('teacher.wallet.withdraw', compact('wallet'));
    }

    public function teacher_withdraw_store(Request $request) {
        $setting = Setting::first();
        $wallet = Wallet::findOrFail(Auth::id());
        $request->validate([
            'input_withdraw' => 'required|gte:'. $setting->min_withdraw . '|lte:' . $wallet->wallet_amount,
        ]);

        $wallet_update = [
            'wallet_amount' => $wallet->wallet_amount - $request->input_withdraw,
        ];

        $validated = [
            'id' => Str::random(10),
            'wallet_id' => $wallet->id,
            'wallet_history_desc' => 'Withdraw Money',
            'wallet_history_money' => -$request->input_withdraw,
            'wallet_history_status' => 'PENDING',
        ];

        Wallet::where('id', Auth::id())->update($wallet_update);
        WalletHistory::create($validated);

        $notification = [
            'message' => 'Wallet Withdraw Successfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('teacher.wallet.index')->with($notification);
    }
}
