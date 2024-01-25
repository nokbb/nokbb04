<!--
*   extends：親ビューを継承する（読み込む）
*   親ビュー名：layout を指定
-->
@extends('layout')

<!--
*   section：子ビューにsectionでデータを定義する
*   セクション名：content を指定
*   用途：フォルダを編集するページのHTMLを表示する
-->
@section('content')
<div class="container">
    <div class="row">
    <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
            <div class="panel-heading">フォルダを編集する</div>
            <div class="panel-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('folders.edit', ['folder' => $folder_id]) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">フォルダ名</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') ?? $folder_title }}" />
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">送信</button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
    </div>
</div>
@endsection