<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Univer</title>

        <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
            {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

            <style>
                body {
                    font-family: 'Lato';
                }

                .fa-btn {
                    margin-right: 6px;
                }
            </style>

    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('students.index')}}">
                        Students
                    </a>
                    <a class="navbar-brand" href="{{route('groups.index')}}">
                        Groups
                    </a>
                    <a class="navbar-brand" href="{{route('marks.index')}}">
                        Marks
                    </a>
                </div>
            </nav>
        </div>

        @yield('content')
    </body>
</html>
