<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class shoppingModel extends Model
{
    protected $request;
    protected $table = 'item_id';  //$tableプロパティでモデルとテーブルを紐づける。
    // protected $user = ['first_name', 'last_name', 'username', 'email', 'address', 'address_2', 'country',  'state', 'zip'];

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
