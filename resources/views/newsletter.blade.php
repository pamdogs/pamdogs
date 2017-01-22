<!DOCTYPE html>
<html>
    <head>
        <title>PamDogs</title>

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
                <div class="title">PamDogs</div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @else
                    <form method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <label>Nombre:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}">
                        <label>Email:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}">
                        <label>Lugar:</label>
                        <input type="text" name="place" id="place" value="{{ old('place') }}">
                        <button type="submit">Enviar</button>
                    </form>
                @endif
            </div>
        </div>
    </body>
</html>
