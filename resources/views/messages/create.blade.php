@extends("layouts.app")

@section("content")

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif

    <h1>メッセージの新規投稿</h1>

    {!! Form::model($message, ["route" => "messages.store"]) !!}
        {!! Form::label("content", "メッセージ：") !!}
        {!! Form::text("content", null) !!}
        {!! Form::submit("投稿") !!}
    {!! Form::close() !!}

@endsection