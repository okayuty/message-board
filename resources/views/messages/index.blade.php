@extends("layouts.app")

@section("content")
    <h1>メッセージ一覧</h1>
    @if (count($messages) > 0)
        <table border="1">
            <tr>
                <th>id</th>
                <th>メッセージ</th>
            </tr>
            @foreach ($messages as $message)
                <tr>
                    <td>
                        {!! link_to_route("messages.show", $message->id, ["message" => $message->id ]) !!}
                    </td>
                    <td>
                        {{ $message->content }}
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    {!! link_to_route("messages.create", '新規メッセージの投稿') !!}

@endsection