<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        {{-- material icon --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


        {{-- custom css file --}}
        <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">

    </head>


<body class="style-3">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark mynav-border" id="mynav">
        <a class="navbar-brand" href="">
            <img class="d-inline-block mybrand myborder-test" src="{{ asset('css/228.png') }}">
            Navbar
        </a>
        
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </nav>


    <div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
        <a href="#"><span><i class="material-icons">info</i><span class="icon-text">about</span></a><br>
        <a href="#"><i class="material-icons">spa</i><span class="icon-text"></span>services</a></span>
        </a><br>
        <a href="#"><i class="material-icons">monetization_on</i><span class="icon-text"></span>clients</span></a><br>
        <a href="#"><i class="material-icons">email</i><span class="icon-text"></span>contact<span></a>
    </div>

    <div id="main" class="">
        @yield('content')
    </div>
    <section style="height:2000px;"></section>


    {{-- bootstrap js file --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    {{-- jquery file --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- custom script --}}
    <script type="text/javascript" src="{{ asset('js/my-script.js') }}"></script>
</body>
</html>