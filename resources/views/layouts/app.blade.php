<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel POS') | TFA6</title>
    <style>
        :root { color-scheme: dark; }
        * { box-sizing: border-box; }
        body { margin: 0; background: #0b1220; color: #e5e7eb; font: 16px/1.6 Arial, sans-serif; }
        header { background: #111c30; border-bottom: 1px solid #243550; }
        .nav { max-width: 1060px; margin: auto; padding: 20px; display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap; }
        .brand { color: #67e8f9; text-decoration: none; font-weight: 800; font-size: 1.2rem; }
        nav { display:flex; flex-wrap:wrap; gap:10px; }
        nav a { text-decoration:none; color:#cbd5e1; padding:8px 12px; border-radius:8px; }
        nav a:hover, nav a.active { color:#0b1220; background:#67e8f9; }
        main { max-width: 1060px; margin: 42px auto; padding: 0 20px; }
        h1 { margin: 0 0 10px; font-size: clamp(1.8rem, 4vw, 2.5rem); }
        h2 { color: #67e8f9; }
        p { color:#cbd5e1; }
        .card { background:#111c30; border:1px solid #243550; border-radius:14px; padding:24px; }
        .tag { display:inline-block; background:#143c4d; color:#a5f3fc; padding:5px 10px; border-radius:20px; font-size:0.85rem; }
        .button { display:inline-block; margin:10px 10px 0 0; padding:10px 16px; border-radius:8px; background:#22d3ee; color:#082f49; font-weight:bold; text-decoration:none; }
        .table-wrap { overflow-x:auto; margin-top:20px; border:1px solid #243550; border-radius:12px; }
        table { border-collapse:collapse; width:100%; background:#111c30; min-width:580px; }
        th,td { text-align:left; padding:14px; border-bottom:1px solid #243550; }
        th { background:#172940; color:#67e8f9; }
        tr:last-child td { border-bottom:none; }
        .record-count { margin-bottom: 0; color:#94a3b8; font-size:.9rem; }
        footer { max-width:1060px; margin:65px auto 20px; padding:0 20px; color:#94a3b8; font-size:.9rem; }
    </style>
</head>
<body>
<header>
    <div class="nav">
        <a class="brand" href="{{ route('home') }}">PC Parts POS</a>
        <nav aria-label="Main navigation">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('customers') }}" class="{{ request()->routeIs('customers') ? 'active' : '' }}">Customers</a>
            <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">Users</a>
        </nav>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer>IT0049 - Web System Technologies | TFA6 — From Arrays to Eloquent</footer>
</body>
</html>
