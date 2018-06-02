<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected  $fillable=['name', 'company', 'branch', 'balance', 'user_id', 'status'];

    public static function updateAccount($account_id, $debit, $credit)
    {
        $account = Account::findOrFail($account_id);
        if($debit != null){
            $account->balance = $account->balance - $debit;
        }else{
            $account->balance = $account->balance + $credit;
        }
        $account->update();
    }
}
