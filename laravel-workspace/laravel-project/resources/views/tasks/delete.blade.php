<!--
*   extends：親ビューを継承する（読み込む）
*   親ビュー名：layout を指定
-->
@extends('layout')

<!--
*   section：子ビューにsectionでデータを定義する
*   セクション名：styles を指定
*   用途：javascriptライブラリー「flatpickr」のスタイルシートを指定
-->
@section('styles')
    @include('share.flatpickr.styles')
@endsection

<!--
*   section：子ビューにsectionでデータを定義する
*   セクション名：content を指定
*   用途：タスクを削除するページのHTMLを表示する
-->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">タスクを削除する</div>
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
                        <form action="{{ route('tasks.delete', ['folder' => $task->folder_id, 'task' => $task->id]) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">タイトル</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    value="{{ old('title') ?? $task->title }}"
                                disabled />
                            </div>
                            <div class="form-group">
                                <label for="status">状態</label>
                                <select name="status" id="status" class="form-control" disabled>
                                    @foreach(\App\Models\Task::STATUS as $key => $val)
                                        <option value="{{ $key }}" {{ $key == old('status', $task->status) ? 'selected' : '' }}>
                                            {{ $val['label'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="due_date">期限</label>
                                <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') ?? $task->formatted_due_date }}" disabled />
                            </div>
                            <p>上記の項目を削除しようとしています。本当によろしいでしょうか？</p>
                            <div class="text-right">
                                <button type="button" class="btn btn-primary" onclick="window.location='{{ route('tasks.index', ['folder' => $task->folder_id]) }}'">キャンセル</button>
                                <button type="submit" class="btn btn-primary">削除</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection

<!--
*   section：子ビューで定義したデータを表示する
*   セクション名：scripts を指定
*   目的：flatpickr によるカレンダー形式による日付選択
*   用途：javascriptライブラリー「flatpickr」のインポート
-->
@section('scripts')
    @include('share.flatpickr.scripts')
@endsection