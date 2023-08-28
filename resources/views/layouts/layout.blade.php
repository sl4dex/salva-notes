<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Global Css -->
        <style>
            html {
                line-height:1.5;
                -webkit-text-size-adjust:100%;
                -moz-tab-size:4;
                tab-size:4;
                font-family:Figtree;
                height: 100%;
                margin: 0;
            }
            body {
                position: relative;
                display: flex;
                margin: 0px;
                height: 100%;
                width: 100%;
                align-items: stretch;
            }
           .wrapper {
                min-height: 100%;
                height: 100%;
                width: 100%;
            }
            h1, h2, h3, h4, p {
                margin: 0;
                padding: 0;
            }
            h1 {background-color: mediumpurple;}
            button {cursor:pointer}:disabled{cursor:default}
            table, th, td {border: 1px solid;}
            table {border-collapse: collapse;}
            aside {
                width: 20%;
                background-color: lavender;
            }
            section {width: 70%;}
            a {text-decoration: none; color:inherit;}
            a:hover {color: cyan;}
            #html-content {display: none;}
            textarea {
                border: none; outline: none; resize: none;
                background-color: aliceblue;
                min-height: 100%;
                width:100%;
            }
        </style>
        @yield('extra_styles')
        @yield('scripts')
    </head>

    <body class="antialiased">
        <div class="wrapper">
            <!-- Añadir navbar -->

            @yield('content')

            <!-- Añadir footer -->
        </div>
    </body>
</html>
