<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Lora:400,400i,700,700i|Raleway|Roboto:300,400,500,700&display=swap" rel="stylesheet  media="screen,projection" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/exstyle.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!--
        main content of the page goes here
        -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var instances = M.AutoInit();
        });
        
        $('document').ready(function()  {
            $("#profit_calc_btn").click(function calculate(){  
            var initial_amount = $("#howmuch").val();
            var increment = $("#duration").val();
            var rate = $("#duration").val().replace(/m|p|o/i,'').replace(/m|p|o/i,'').replace(/m|p|o/i,'');
            var duration = rate/12;
            var currency = $("#currency").val();

            var profit = initial_amount*duration*currency-initial_amount*-1;
            var fees = profit/10;
            var bonus = profit-fees;
            var total = profit + bonus + initial_amount;
            $("#profit1").html("$"+profit);
            $("#fees").html("-$"+fees);
            $("#bonus").html("$"+bonus);
            $("#total").html("$"+total);
            console.log(rate);
            console.log(currency);
            console.log(initial_amount);
            });
          });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
