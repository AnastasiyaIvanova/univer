@extends('layout.app')
<html lang="en">
    <head>
        <title>Groups</title>

        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Groups</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($groups as $group)
                                    <tr>
                                        <td class="table-text"><div>{{ $group->name }}</div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')
    </body>
</html>
