<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets\css/dashboard.css">
    <!-- <link rel="stylesheet" href="/assets\bootstrap-5.0.2-dist/css/bootstrap.min.css"> -->
</head>

<body>
    <div class="fContainer">
        <!-- start sidebar -->
        <div class="sidebar">
            <header>My app</header>
            <div class="toogle">
                <li><a href="/dashboard/barang/table_barang">Barang</a></li>
            </div>
        </div>
        <!-- end sidebar -->

        <!-- start navbar -->
        <nav class="wrapper">
            <ul>
                <h2>PT INVENTARIS GELORA GEMILANG</h2>
            </ul>
        </nav>
        <!-- end navbar -->
    </div>

    @yield('content')

</body>

</html>