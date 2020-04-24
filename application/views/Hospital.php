<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.DaftarRS {
  position: absolute;
  top: 850px;
  right: 0; 
  left: 0;
  height: 100px;
  width: 100%;
  
}

.HeaderRS {
  position: relative;
  width: 100%;
  height: 500px; 
  margin: 0 auto;
  vertical-align: middle;
}

.txtHeader {
  position: absolute;
  left: 0;
  text-align: center;
  top:400px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
  color: white;
  width: 100%;
  padding: 20px;
}
</style>
</head>
<body>

<div class="HeaderRS">
    <div class="row align-items-center">
        <img src="gambar/Hospitals.jpg" alt="Hospitals" style="width:100%;">
        <div class="txtHeader">
            <h1>DAFTAR RUMAH SAKIT</h1>
        </div>
    </div>
</div>


   <div class="DaftarRS">

    <hr class="my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="gambar/rshermina.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Hermina</h4>
                  <a class="btn btn-primary">Daftar Rujukan</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="gambar/rspertamina.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Pertamina</h4>
                  <a class="btn btn-primary">Daftar Rujukan</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="gambar/rspersahabatan.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Persahabatan</h4>
                  <a class="btn btn-primary">Daftar Rujukan</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="gambar/rshermina.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Hermina</h4>
                  <a class="btn btn-primary">Daftar Rujukan</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="gambar/rsjakarta.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Jakarta</h4>
                  <a class="btn btn-primary">Daftar Rujukan</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="gambar/rspersahabatan.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">RS Persahabatan</h4>
                 <a class="btn btn-primary"> Daftar Rujukan</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>
</body>
</html>