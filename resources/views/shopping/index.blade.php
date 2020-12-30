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
<main role="main">
    <section class="jumbotron text-center">
      <div class="container">
        <h1>商品</h1>
      </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          @foreach ($items as $item)
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              <div class="card-body">
                <p class="card-text">商品名：{{$item->name}}</p>
                <p class="card-text">価格：{{$item->price}}円</p>
                <p class="card-text">商品説明：{{$item->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <form action="cart" method="post"> <!--カートへ追加-->
                    @csrf
                    <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                    <button type="submit" class="btn btn-sm btn-outline-secondary" value='{{$item->name}}' name="item">カートに追加</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </main>
  </html>
@endsection
