<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets\css/dashboard.css">
</head>

<body>
    <!-- start navbar -->
    <div class="fContainer">
        <nav class="wrapper">
            <h1>PT. INVENTARIS GELORA GEMILANG</h1>
        </nav>
        @yield('content')
    </div>
    <!-- end navbar -->
    
    <!-- start sidebar -->
    <div class="sidebar">
        <header>HALO</header>
        <label>NAME</label>
        <ul>
            <a href="#">LOGOUT</a>
        </ul>
    </div>
    <!-- end sidebar -->
</body>

</html>