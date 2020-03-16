<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="container">
            <header>
                {!! link_to("/", "TOP") !!}
                {!! link_to_route("messages.create", "新規メッセージの投稿") !!}
            </header>
            @yield("content")
        </div>
    </body>
</html>