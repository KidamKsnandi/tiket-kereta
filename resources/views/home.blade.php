
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pemesanan Tiket Kereta</title>

    <link href="assets/css/style.css"
        rel="stylesheet">
</head>
<body>
    <style>
        .back {
            background-image: url('img/back.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #app {
            background-color: rgba(0, 0, 0, 0.459);
            height: 625px;
        }
        header {
            box-shadow: 0px 3px 10px black;
        }
    </style>
    <div class="back">
    <div id="app">

        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->
        <header class="py-3 bg-dark">
            <div class="container">
                <!-- Start Header -->
                <div class="header">
                    <nav class="navbar navbar-expand-md navbar-light px-0">
                        <h2>
                        <a href="/">
                            <b>
                            <span class="text-white">Tiket</span><span class="text-info"> Kereta</span>
                        </b>
                        </a></h2>
                    <ul class="navbar-nav ml-auto">
                                <li class="nav-item" style="padding-right: 10px;">
                                    <a class="btn btn-outline-info" href="admin/">Admin</a>
                                </li>

                                <li class="nav-item">
                                    <a class="btn btn-outline-info" href="petugas/kereta">Petugas</a>
                                </li>
                    </ul>

                <!-- End Header -->
        </header><br><br><br><br><br><br><br><br><br>
        <!-- ============================================================== -->
        <!-- Header part -->
        <!-- ============================================================== -->

        <div class="content text-center text-white">
            <h1>SELAMAT DATANG,  {{ Auth::user()->name }}</h1>
            <h1> Pemesanan Tiket Kereta</h1>
            <a href="user/" class="btn btn-info col-sm-2">Lanjutkan</a>
        </div>
</div>
    </div>
</body>
</html>
