<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <h3>Dashboard</h3>
    </header>

    @if(session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
        
    @yield('content')

    <section>
        @yield('morecontent')
    </section>
</body>
</html>