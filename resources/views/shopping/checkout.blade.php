<!--共通レイアウト-->
@extends('shopping.base')
<!---->
@section('title', 'Album example · Bootstrap')
<!---->
@section('main')
@if (session('flash_message'))
<div class="flash_message bg-success text-center py-3 my-0">
    {{ session('flash_message') }}
</div>
@endif
  <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{ asset('image/cart.jpeg') }}" alt="" width="72" height="72">
    <h2>会計</h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">カート</span>
        <span class="badge badge-secondary badge-pill">{{$count}}</span>
      </h4>
      <ul class="list-group mb-3">
        <form action="delete" method="POST">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-secondary" name="item">カートの中身を削除</button>
        </form>
        <hr>
        @if ($a == null)
        <!-- nullなら何も実行されない -->
        @else
        @foreach ($a as $b)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{$b}}</h6>
              @foreach ($items as $item)
              @if ($b == $item->name)
              <small class="text-muted">{{$item->description}}</small>
              @endif
              @endforeach
            </div>
            @foreach ($items as $item)
              @if ($b == $item->name)
              <span class="text-muted">{{$item->price}}円</span>
              @endif
            @endforeach
          </li>
        @endforeach
        @endif
        <li class="list-group-item d-flex justify-content-between">
          <span>合計</span>
          <strong>{{$total}}円</strong>
        </li>
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">請求先住所</h4>
      <form class="needs-validation" action="buy" method="post" novalidate>
        @csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">名前</label>
            <input type="text" class="form-control" name="first_name" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
                名字を入力してください。
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">苗字</label>
            <input type="text" class="form-control" name="last_name" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              名前を入力してください。
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">ユーザーネーム</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
                ユーザーネームを入力してください。
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">メールアドレス <span class="text-muted">(オプション)</span></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            有効なメールアドレスを入力してください。
          </div>
        </div>

        <div class="mb-3">
          <label for="address">送り先住所</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="東京都千代田区千代田1-1" required>
          <div class="invalid-feedback">
            送り先住所を入力してください。
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">送り先住所 2<span class="text-muted">(オプション)</span></label>
          <input type="text" class="form-control" name="address_2" id="address2" placeholder="アパートやマンション名">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">国</label>
            <select class="custom-select d-block w-100" name="country" id="country" required>
              <option value="">選択してください</option>
              <option>日本</option>
            </select>
            <div class="invalid-feedback">
                有効な国を選択してください。
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">都道府県</label>
            <select class="custom-select d-block w-100" name="state" id="state" required>
              <option value="">選択してください</option>
              <option>千葉県</option>
            </select>
            <div class="invalid-feedback">
                有効な都道府県を入力してください。
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">郵便番号</label>
            <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              郵便番号を入力してください。
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">送り先は請求先と同じ
        </label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">保存して次回からの入力を省略する</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">購入完了</button>
      </form>
    </div>
  </div>
@endsection
