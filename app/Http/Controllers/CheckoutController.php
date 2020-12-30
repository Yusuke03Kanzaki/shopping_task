<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingModel;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /*
    Modelから商品情報を取得してviewへ渡す
    */
    function index(Request $request)
    {
        $items = ShoppingModel::get_items();

        return view('shopping.index', compact('items'));
    }

    /*
    checkoutページを表示
    */
    function checkout(Request $request)
    {
        $items = ShoppingModel::get_items();

        $a = session()->get('item');

        //セッションが存在すれば配列の中身を数える。なければ０を代入
        if (is_countable($a)) {
            $count =count($a);
        } else {
            $count = 0;
        }

        //totalメソッドを呼び出し合計金額を取得
        $total = $this->total($request);

        return view('shopping.checkout', compact('a', 'items', 'count', 'total'));
    }

    /*
    カートに商品がなければメッセージ表示後にリダイレクト。ユーザー登録のためのモデル呼び出し。セッション削除。HPにリダイレクト
    */
    function buy(Request $request)
    {
        if (!is_countable(session()->get('item'))) {
            session()->flash('flash_message', 'カートに商品がありません');

            return redirect('/checkout');
        }

        ShoppingModel::user($request);

        $request->session()->flush();

        session()->flash('flash_message', 'ご購入ありがとうございます');

        return redirect('/');
    }

    //セッション取得。カートに入れる
    function cart(Request $request)
    {
        $request->session()->push('item', $request->input('item'));

        session()->flash('flash_message', 'カートに追加しました');

        return redirect('/');
    }

    //セッション削除
    function delete(Request $req)
    {
        $req->session()->flush();

        return redirect('checkout');
    }

    //カートに入れた商品の合計金額を計算。計算結果を返す
    function total(Request $request)
    {
        $items = ShoppingModel::get_items();

        $a = session()->get('item');

        $total = 0;

        foreach ((array)$a as $b) {
            foreach ($items as $item) {
                if ($b == $item->name) {
                    $total += $item->price;
                }
            }
        }

        return $total;
    }
}
