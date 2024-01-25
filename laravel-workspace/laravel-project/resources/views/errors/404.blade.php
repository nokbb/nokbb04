<!--
*   extends()：親ビューを継承する（読み込む）
*   親ビュー名：layout を指定
-->
@extends('layout')

<!--
*   section()：子ビューにsectionでデータを定義する
*   セクション名：content を指定
*   用途：404エラーページを表示する
-->
@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <div class="text-center">
                <h2>404 | NOT FOUND</h2>
                <p>お探しのページは見つかりませんでした。</p>
                <a href="{{ route('home') }}" class="btn">
                    ホームへ戻る
                </a>
            </div>
        </div>
    </div>
</div>
@endsection