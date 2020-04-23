
    <style>
        #box1 {
            position: absolute;
            top: 50px;
            right: 0;
            left: 0;
            height: 550px;
            width: 100%;
            background-image : url('../assets/images/home1.jpg');
            background-size: 100% ;
            filter: contrast(80%);
        }
        #box2{
            position: absolute;
            top: 450px;
            right: 0;
            left: 0;
            height: 100px;
            width: 100%;
            background-color: black;
            opacity:70%;
        }
        #box3{
            position: absolute;
            top: 1350px;
            right: 0;
            left: 0;
            height: 300px;
            width: 100%;
            background-color: #FFE600;
        }
        h1{
            font-family: Open Sans;
            font-style: normal;
            font-weight: bold;
            font-size: 54px;
            color: white;
            text-align:center;

        }
        h2{
            font-family: Open Sans;
            font-style: normal;
            font-weight: bold;
            font-size: 36px;
            text-align: center;

            color: #000000;
        }
        h3{
            font-family: Open Sans;
            font-style: normal;
            font-weight: normal;
            font-size: 22px;
            text-align: center;

            color: #000000;
        }
        .carousel-inner img {
            width: 100%;
            height: 700px;
        }
    </style>

	</head>

	<body>
    <div id="box1">
        <div class="container">
            <div class="row align-items-center">
                <div id="box2"></div>
                <div class="col-2"></div>
                <div class="col-8">
                    <h1 style="padding-top: 180px;">Tubes Webpro Asw Terdepan disegala situesyen</h1>
                    <h1 style="padding-top: 150px;">Berita Terkini</h1>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div id="demo" style="padding-top:70px;" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                    <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/images/home1.jpg" alt="Los Angeles">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/background1.jpg" alt="Chicago">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/background.jpg" alt="New York">
                            </div>
                        </div>
                    <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div id="box3"></div>
                    <div class="col-2"><img src="../assets/images/kutip1.png"></div>
                    <div class="col-8">
                        <h2 style="padding-top: 100px;">Tips Jaga Kesehatan</h2>
                        <h3 style="padding-top: 10px;">Cuci tangan</h3>
                    </div>
                <div class="col-2"><img style="padding-top:250px; padding-left:100px;" src="../assets/images/kutip2.png"></div>
            </div>
        </div>
	</body>
</html>
