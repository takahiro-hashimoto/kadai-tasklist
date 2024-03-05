@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>id = {{ $task->id }} の詳細ページ</h2>
    </div>

    <table class="table w-full my-4">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>

        <tr>
            <th>やること</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    <a class="btn btn-outline" href="{{ route('tasks.edit', $task->id) }}">このタスクを編集</a>
    
@endsection