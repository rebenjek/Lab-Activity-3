<?php 
  /* Template Name: ABOUT*/

?>


<!DOCTYPE html>
<html>
<head>
	<title>ABOUT US</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link rel="preconnect" href="https://fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
  
.transhover:hover
{
  font-size: 17px;
  transition: 0.2s;

}

.transhover
{
  transition: 0.2s;
  font-family: sans-serif;
}

.carouselsize
{
  width: 1000px;
  height: 100px;
}

#eff:hover
{
  font-size: 15px;
}


.hovereffect {
  border-radius: 5px;
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: -webkit-linear-gradient(45deg, #ff89e9 0%, #05abe0 100%);
  background: linear-gradient(45deg, #ff89e9 0%,#05abe0 100%);
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 3em;
  text-align: left;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 60px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-40px,0,0);
  transform: translate3d(-40px,0,0);
}

.hovereffect h2 {
  font-family: tahoma black; 
  text-shadow: 2px 2px 4px #000000;
  text-transform: uppercase;
  color: #fff;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  padding: 15% 0 10px 0;
  text-align: left;
}

.hovereffect .overlay:before {
  position: absolute;
  top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px;
  border: 1px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-20px,0,0);
  transform: translate3d(-20px,0,0);
}

.hovereffect a, .hovereffect p {
  color: black;
  font-weight: bold;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  text-shadow: 2px 2px 4px #000000; text-decoration: none;
}

.hovereffect:hover img {
  opacity: 0.6;
  filter: alpha(opacity=60);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect:hover .overlay:before,
.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}


.shoes
{
  position: relative;
  left: 140px;
  margin: 10px;
}

@media screen and (max-width: 360px)
{

  .alis
  {
    display: none;
  }
}


.ourprod
{
  font-family: 'Mukta', sans-serif;
  font-size: 30px;
  color: white;
  text-shadow: 4px 4px 6px #000000;
  cursor: default;
}

.jumbotron
{
  background: #343a40;
}


.txtdes
{
  font-family: tahoma black;
}


.red
{
  background-color: #8C0712;
}


</style>
<body>


<div class="container-fluid">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a href="http://localhost/ecommlab/home" class="navbar-brand">
            <img src="http://localhost/ecommlab/wp-content/uploads/2021/04/logo.jpg" height="80" alt="logo" class="rounded">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="http://localhost/ecommlab/home/" class="nav-item nav-link btn btn-dark transhover w3-sans-serif ">HOME</a>
                <a href="#" class="nav-item nav-link btn btn-dark active w3-sans-serif">ABOUT US</a>
                <a href="http://localhost/ecommlab/contact" class="nav-item nav-link btn btn-dark transhover w3-sans-serif">CONTACT</a>
                
            </div>
            <div class="ml-auto">
	            </div>
            </div>
        </div>
    </nav>
</div>


<div class="container red mb-5" style="height: 80px;">
    <h3 class="text-center pt-4 font-weight-bolder ourprod">ABOUT US</h3>
</div>

<div class="container">
  <div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h3 class="display-4">About the site</h3>
        <p class="font-italic text-muted mb-4">
          Founded on March 16, 2020.
          This site sells different varieties of shoes for everyday needs. Made by Raven Jake F. Latina, a BS Information Technology student
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="https://coconuts.co/wp-content/uploads/2018/10/24909826_1592157077510882_2274216933564302602_n.jpg" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">OUR MISSION</h2>
        <p class="font-italic text-muted mb-4">The mission of Raven's shoe shop is to efficiently and effectively satisfy our customer’s needs. This means that we consider our clients as partners, we involve suppliers in a process of continuing improvement and we work to perfect our processes and corporate organisation to create a professional team that has a reputation for being the very best.</p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="http://localhost/ecommlab/wp-content/uploads/2021/04/skate.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="http://localhost/ecommlab/wp-content/uploads/2021/04/running.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">OUR VISION</h2>
        <p class="font-italic text-muted mb-4">Be, and be recognized, as the best product and service company in the footwear industry in the Philippines.</p>
      </div>
    </div>
  </div>
</div>

</div>

<!-- Footer -->
<footer class="page-footer font-small text-light bg-dark pt-4">

  <div class="container-fluid text-center text-md-left">
      <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase">Footer</h5>
              <p>This site is for activity purposes only</p>
          </div>


      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
      <h5 class="text-uppercase">Call or Mail us at:</h5>
        <ul class="list-unstyled">
          <li>
                  <h6><img src="">Brgy. Salawag, Dasmarinas Cavite</h6>
                </li>
          <li>
                  <h6>0912345678</h6>
                </li>
                <li>
                  <h6>(046)012-4567</h6>
                </li>
              </ul>
    </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Social Media Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-light nav-link view overlay zoom"><img src="http://localhost/ecommlab/wp-content/uploads/2021/04/fblogo.png" class="rounded" id="eff" width="25">Facebook.com/ravenshoesph</a>
          </li>
          <li>
            <a href="#!" class="text-light nav-link"><img src="http://localhost/ecommlab/wp-content/uploads/2021/04/iglogo.png" class="rounded eff" width="25">Instagram.com/ravenshoesph</a>
          </li>
          <li>
            <a href="#!" class="text-light nav-link"><img src="http://localhost/ecommlab/wp-content/uploads/2021/04/gmaillogo.png" class="rounded eff" width="25">ravenshoes@gmail.com</a>
          </li>
        </ul>

      </div>
    </div>
  </div>


  <div class="footer-copyright text-center py-3">
      © 2021 LAB ACTIVITY
  </div>


</footer>


</body>
</html>