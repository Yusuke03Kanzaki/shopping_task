<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    #sample {
        height: 50px;
        width: 300px;
        background: green;
    }
</style>
<script>
    $(document).ready(function() {
        $('#sample').fadeOut(5000);
    });
</script>

@if (Session::has('message'))
<div id="sample">
    <p>{{ Session::get('message') }}</p>
</div>
@endif

@if (Session::has('name'))
<p>{{ Session::get('name') }}</p>
<p><a href="session/delete">破棄する</a></p>
@else
<p>セッションデータはありません。</p>
@endif

<form action="session" method="POST">
    @csrf
    <p>名前：<input type="text" name="name"></p>
    <input type="submit" value="ボタン">
</form>
