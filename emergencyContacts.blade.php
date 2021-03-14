<!DOCTYPE html>
<html>
<head>
<title>Our Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<style>
.gallery_product .btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.gallery_product .btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
.gallery_product img
{
  width:300px;
  height:300px;
  -webkit-box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
transition: all ease-in-out 0.4s;
}
.gallery_product img:hover
{
    transform: scale(1.1,1.1);
}
.gallery-title
{
  font-size: 32px;
  color: rgba(0,19,102,1);
  text-align: center;
  font-weight: 600;
  position: relative;
  padding-bottom: 15px;
  
}

.port-image
{
    width: 80%;
}
.container
{
  background-color: #edf7f6;
  width:70%;
  padding:60px;
  -webkit-box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
  -moz-box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
  box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
}
.gallery_product
{
    margin-bottom: 30px;
}
@media (max-width:600px)
{
  #gallery
  {
    padding-top:-120px;
  }
.container
{
  background-color: #edf7f6;
  width:100%;
  padding:40px;
  -webkit-box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
  -moz-box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
  box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
}
.gallery_product img
{
  width:200px;
  height:200px;
  -webkit-box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
transition: all ease-in-out 0.4s;
}
}
.success{
    padding: 5px;
  background:#0af27e;
  opacity: 0.8;
  width:100%;
  height:50px;
  border-radius:;
  color:black;
  font-size:15px;
  }
  </style>
</head>
<body>
 <!-- ======= Gallery Section ======= -->
 @if(session()->has('success'))
          <div class="success">
            <ul>
              <li>{{session('success')}}</li>
            </ul>
          </div>
          @endif
  <br><br><br><br><br><br><br><br>
      <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">EmergencyContacts</h1>
        </div>
        <br/>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spacet">
                <img src="assets/img/police.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter astro">
                <img src="assets/img/contact.jpg" class="img-responsive">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter astro">
                <img src="assets/img/contact.jpg" class="img-responsive">
            </div>
            <button class="btn btn-primary" type="button" onclick="sendmail()"> SendMail</button>
        </div>  
    </div>
    <script>
      function sendmail()
      {
        alert("mailMent");
      }
      </script>
@include('layout.partials.footer-scripts');

</body>
</html>

