<?php 
  /* Template Name: CONTACTS */

?>


<!DOCTYPE html>
<html>
<head>
    <title>CONTACT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>

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


.centermap
{
 display: block;
 margin-left: auto;
 margin-right: auto;
 width: 50%;
}

.red
{
  background-color: #8C0712;
}

.ourprod
{
  font-family: 'Mukta', sans-serif;
  font-size: 30px;
  color: white;
  text-shadow: 4px 4px 6px #000000;
  cursor: default;
}

.map-container-3{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-3 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}

@media screen and (max-width: 360px)
{

  .alis
  {
    display: none;
  }
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
                <a href="http://localhost/ecommlab/about" class="nav-item nav-link btn btn-dark transhover w3-sans-serif">ABOUT US</a>
                <a href="#" class="nav-item nav-link btn btn-dark active w3-sans-serif">CONTACT</a>

            </div>
            <div class="ml-auto">
                
            </div>
        </div>
    </nav>
</div>

<br>
<br>

<div class="container">
<div class="jumbotron mb-5 red">
    <h3 class="text-center ourprod">CONTACT US</h3>
</div>
</div>

<div class="container mb-5">

    <div class="row">

      <div class="col-md-12 col-lg-offset-3">


        <form id="contact-form" method="post" action="" role="form">

        <div class="messages"></div>

        <div class="controls">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name">Firstname *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_lastname">Lastname *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_phone">Phone</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">Message *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
          </div>

        </div>

        </form>

      </div>

    </div>

  </div>

  <hr>
  <br>
  <br>

  <div class="container">
    <div class="jumbotron text-center red">
        <h3 class="ourprod">OUR LOCATION</h3>
      </div>
    </div>

    <div class="centermap">
      <!--Google map-->
      <div id="map-container-google-3" class="z-depth-1-half map-container-3">
        <iframe src="https://maps.google.com/maps?q=Diamond%20village%20dasmarinas&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
        </div>

    </div>
  </div>

  <br>
  <br>

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
