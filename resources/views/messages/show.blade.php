@extends("layouts.app")

@section("content")

    <h1>ID：{{ $message->id }}のメッセージ詳細ページ</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <td>メッセージ</td>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    {!! link_to_route("messages.edit", "このメッセージを編集する", ["message" => $message->id]) !!}

    {!! Form::model($message, ["route" => ["messages.destroy", $message->id], "method" => "delete"]) !!}
        {!! Form::submit("このメッセージを削除する") !!}
    {!! Form::close() !!}

@endsection