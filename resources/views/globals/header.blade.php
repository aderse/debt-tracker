<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Debt Tracker</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <!-- Load in bootstrap from CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Load in the default CSS styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" defer></script>

        <!-- Load in the default JS scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    <body>
        <header class="container mt-3 border-bottom border-dark">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <h1 class="text-left">Debt Tracker</h1>
                </div>
                <div class="col-md-12 col-lg-6">
                    <nav id="main-menu">
                        <ul class="nav justify-content-end">
                            <li class="nav-item ms-3">
                                <a class="btn btn-outline-dark" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="btn btn-outline-dark" href="{{ url('/list-debtors') }}">List Debtors</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="btn btn-outline-dark" href="{{ url('/add-debtor') }}">Add Debtor</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>