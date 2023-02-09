<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\Setting;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class WalletController extends Controller
{
    public function wallet_all() {
        $wallets = Wallet::orderBy('wallet_amount', 'DESC')->get();
        $title = 'All Wallet';
        return view('admin.wallet.allwallet', compact('wallets', 'title'));
    }

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
        $title = 'My Wallet';
        return view('admin.wallet.index', compact('wallet', 'setting', 'in', 'out', 'affiliate', 'title'));
    }

    public function method() {
        $wallet = Wallet::findOrFail(Auth::id());
        $payment_methods = PaymentMethod::orderBy('payment_method', 'ASC')->get();
        $title = 'Withdraw Method';
        return view('admin.wallet.method', compact('wallet', 'payment_methods', 'title'));
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

        $title = 'All Withdraw';
        return view('admin.wallet.withdraw', compact('wallet', 'title'));
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
        $title = 'My Wallet';
        return view('teacher.wallet.index', compact('wallet', 'setting', 'in', 'out', 'affiliate', 'title'));
    }

    public function teacher_method() {
        $wallet = Wallet::findOrFail(Auth::id());
        $payment_methods = PaymentMethod::orderBy('payment_method', 'ASC')->get();
        $title = 'Withdraw Method';
        return view('teacher.wallet.method', compact('wallet', 'payment_methods', 'title'));
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

        $title = 'Withdraw';
        return view('teacher.wallet.withdraw', compact('wallet', 'title'));
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

    public function user_index() {
        $wallet = Wallet::with('wallet_history')->findOrFail(Auth::id());

        if (!$wallet->wallet_method) {
            return redirect()->route('user.wallet.method');
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
        $title = 'My Wallet';
        return view('user.wallet.index', compact('wallet', 'setting', 'in', 'out', 'affiliate', 'title'));
    }

    public function user_method() {
        $wallet = Wallet::findOrFail(Auth::id());
        $payment_methods = PaymentMethod::orderBy('payment_method', 'ASC')->get();
        $title = 'Withdraw Method';
        return view('user.wallet.method', compact('wallet', 'payment_methods', 'title'));
    }

    public function user_update(Request $request, Wallet $wallet) {
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
        return redirect()->route('user.wallet.index')->with($notification);
    }

    public function user_withdraw() {
        $setting = Setting::first();
        $wallet = Wallet::findOrFail(Auth::id());
        if ($wallet->wallet_amount < $setting->min_withdraw) {
            $notification = [
                'message' => 'Minimal Withdraw Not Reached',
                'alert-type' => 'error',
            ];
            return redirect()->back()->with($notification);
        }

        $title = 'Withdraw';
        return view('user.wallet.withdraw', compact('wallet', 'title'));
    }

    public function user_withdraw_store(Request $request) {
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
        return redirect()->route('user.wallet.index')->with($notification);
    }
}
