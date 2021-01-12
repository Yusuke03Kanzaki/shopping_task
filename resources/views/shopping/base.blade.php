<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">  <!--cssへのパス　-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/album.css')}}" rel="stylesheet">
    <link href="{{asset('/js/form-validation.css')}}" rel="stylesheet">
  </head>
  <body>
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="/shopping/public" class="navbar-brand d-flex align-items-center">
        <strong>商品</strong>
      </a>
      <a href='{{ action('CheckoutController@checkout') }}' class="navbar-brand d-flex align-items-center">
        <strong>会計</strong>
      </a>
      {{-- <a href='{{ action('CheckoutController@login1') }}' class="navbar-brand d-flex align-items-center">
        <strong>ログイン</strong>
      </a> --}}
      <a href='{{ route('login') }}' class="navbar-brand d-flex align-items-center">
        <strong>ログイン</strong>
      </a>
      <form method="POST" name="form_1" id="form_1" action="{{ route('logout') }}">
        @csrf
        <a href="javascript:form_1.submit()" class="navbar-brand d-flex align-items-center">ログアウト</a>
        {{-- <strong>logput</strong> --}}
      </form>

      {{-- <a href='{{ route('logout') }}' methos='POST' class="navbar-brand d-flex align-items-center">
        <strong>ログアウト</strong>
      </a> --}}

      {{-- <a href='/shopping/resources/views/shopping/login.blade.php' class="navbar-brand d-flex align-items-center">
        <strong>ログイン</strong>
      </a> --}}
      {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
    </div>
  </div>
</header>
@section('main')

@show
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">トップに戻る</a>
    </p>
  </div>
</footer>
<script src="{{ asset('/js/app.js') }}"></script>  <!--jsへのパス　-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
<script src="{{asset('/js/form-validation.js')}}"></script></body>
</html>
