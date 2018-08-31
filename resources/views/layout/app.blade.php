<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Univer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layout.styles')
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('students.index')}}">
                        Студенты
                    </a>
                    <a class="navbar-brand" href="{{route('groups.index')}}">
                        Группы
                    </a>
                </div>

            </nav>
        </div>
        @yield('content')
    </body>
</html>
