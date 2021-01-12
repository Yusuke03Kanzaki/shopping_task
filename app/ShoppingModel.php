<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ShoppingModel extends Model
{
    /*
    ユーザー登録。データベスへ登録
    */
    static function user($request)
    {
        $user = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'address_2' => $request->address_2,
            'country' => $request->country,
            'state' => $request->state,
            'zip' => $request->zip,
        ];

        DB::table('user')->insert($user);
    }

    static function get_items()
    {
        $items = DB::table('items')->get();

        return($items);
    }
}
