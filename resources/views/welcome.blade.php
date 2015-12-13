<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Movies</div>

                <div class="searching-form">
                    {!!Form::open(['url' => 'movieresults']) !!}
                    {!! Form::text('movie','') !!}
                    {!! Form::submit('Search') !!}
                    {!! Form::close() !!}
                </div>

                @if($errors->any())
                    <ul>
                    @foreach($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                    @endif
            </div>
        </div>
    </body>
</html>
