<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="grid grid-cols-6  grid-rows-7 h-screen">

    <header class=" col-start-2 col-end-7 row-start-1 row-end-2 bg-slate-900 py-4 px-2">
        @include('components.partials.navbar')
    </header>

    <aside class="col-start-1 col-end-2 row-start-1 row-end-8 bg-slate-900 py-4 px-2 grid grid-rows-7 ">
        @include('components.partials.sidebar')
    </aside>

    <main class="col-start-2 col-end-8 py-6 px-4 ">
        {{ $slot }}
    </main>

</body>

</html>
