<style>
    #box1 {
        margin-bottom: 1250px;
        top: 50px;
        right: 0;
        left: 0;
        height: 550px;
        width: 100%;
        background-image: url('<?php echo base_url() ?>/assets/images/home1.jpg');
        background-size: 100%;
        filter: contrast(80%);
    }

    #box2 {
        position: absolute;
        top: 450px;
        right: 0;
        left: 0;
        height: 100px;
        width: 100%;
        background-color: black;
        opacity: 70%;
    }

    #box3 {
        width: 100%;
        height: 300px;
        background-color: #FFE600;
    }

    h1 {
        font-family: Open Sans;
        font-style: normal;
        font-weight: bold;
        font-size: 54px;
        color: white;
        text-align: center;

    }

    h2 {
        font-family: Open Sans;
        font-style: normal;
        font-weight: bold;
        font-size: 36px;
        text-align: center;

        color: #000000;
    }

    h3 {
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

<body id="pagenya">
    <div id="box1">
        <div class="container">
            <div class="row align-items-start">
                <div id="box2"></div>
                <div class="col-2"></div>
                <div class="col-8">
                    <h1 style="padding-top: 180px;">Dengan Kami Semua Sehat Semua Bahagia</h1>
                    <h1 style="padding-top: 150px;">Berita Terkini</h1>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row align-items-center" style="margin-bottom:100px;">
                <div class="col-12">
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
                                <div class="card">
                                    <img class="card-img-top" src="https://p4.wallpaperbetter.com/wallpaper/204/962/381/microscope-bacteria-microorganisms-microbes-wallpaper-preview.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Apa itu Bakteri?</h4>
                                        <p class="card-text">Bakteri adalah organisme mikroskopis yang tidak terlihat dengan mata telanjang.</p>
                                        <a href="<?= base_url('/Bakteri'); ?>" class="btn btn-primary">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <img class="card-img-top" src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2020/02/18/1247754669.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Virus</h4>
                                        <p class="card-text">Virus adalah organisme mikroskopik (super kecil) yang tersebar di berbagai penjuru dunia dan cenderung bersifat parasit.</p>
                                        <a href="<?= base_url('Virus'); ?>" class="btn btn-primary">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <img class="card-img-top" src="https://motionarray.imgix.net/preview-28388ONwaHNcGX0_0006.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Berita lainnya</h4>
                                        <p class="card-text">Ingin tahu lebih banyak informasi? Klik tombol dibawah!</p>
                                        <a href="<?= base_url('News'); ?>" class="btn btn-primary">See More</a>
                                    </div>
                                </div>
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

        </div>
        <div id="box3">
            <img style="padding-top: 30px; padding-left:10%;" src="<?php echo base_url() ?>/assets/images/kutip1.png">
            <h2 style="padding-top: 10px;">Tips Jaga Kesehatan</h2>
            <h3>Cuci tangan</h3>
            <img style="padding-top: 10px; padding-left:85%;" src="<?php echo base_url() ?>/assets/images/kutip2.png">
        </div>
    </div>
