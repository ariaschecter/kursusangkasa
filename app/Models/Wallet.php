<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function user() {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function payment_method() {
        return $this->belongsTo(PaymentMethod::class, 'wallet_method', 'id');
    }

    public function wallet_history() {
        return $this->hasMany(WalletHistory::class, 'wallet_id', 'id')->orderBy('updated_at', 'DESC');
    }
}
