<!--By Himanshi Jindgar--> 

<!DOCTYPE html>
<html lang="en">

<head>
<style>

.header {
color: white;
font-size: 18px;
font-family: helvetica, sans-serif;
background-color: black;
min-height: 50px;
width: 100%;
text-transform: uppercase;
position: relative;
padding-left: -5px;
}

.header li {
padding: 15px;
display: inline;
}

ul {
padding-top: 10px;
}

.logo {
background: url("../images/wallpaper.jpg") no-repeat;
background-size: cover;
height: 550px;
width: 100%;
padding-top: 140px;
padding-left: 300px;
margin-bottom: -50px;
}
.wallpaper {
-webkit-text-stroke: 1px white;
color: black;
text-shadow:
       3px 3px 0 #000,
     -1px -1px 0 #000,  
      1px -1px 0 #000,
      -1px 1px 0 #000,
       1px 1px 0 #000;
font-size: 80px;
text-transform: uppercase;
font-weight: 100%;
}
.footer {
color: white;
font-size: 12px;
font-family: helvetica, sans-serif;
background-color: black;
min-height: 50px;
width: 100%;
position: relative;
padding-top: 20px;
padding-left: -5px;
padding-bottom: -150px;
}
.img
{
  width:200px;
  height:200px;
  -webkit-box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
-moz-box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
box-shadow: 10px 10px 5px 0px rgba(54,47,54,1);
transition: all ease-in-out 0.4s;

}
.container
{
  background-color: black;
  width:100%;
  padding:40px;
  -webkit-box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
  -moz-box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
  box-shadow: 10px 10px 5px 1px rgba(7,33,54,1);
}
</style>

    <meta name="viewport" content="width=device-width" />
    <title>HTML Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>

<div class="container body-content">
     <div class="col justify-content-center" style="padding-top:90px; padding-left:367px;">
           <p style="color:white">_______________________________________________________</p>
           <h1 style="color:white"> Emergency Contacts</h1>
           <p style="color:white">_______________________________________________________</p>
     </div>
<!--     <div class="container"> -->
<div class="row justify-content-start" style="padding-top:50px;">
                <div class="col" style="padding-top:10px;">
<a href="#"><img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="assets/img/images/police.jpeg" onclick="calling()"/></a>
                </div>
                <div class="col" style="padding-top:10px;">
<a href="#"><img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="assets/img/images/sms.jpeg" onclick="sms()"/></a>
                </div>
                <div class="col" style="padding-top:10px;">
<a href="#"><img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="assets/img/images/call.jpeg"onclick="sos()" /></a>
                </div>
                </div>
                <div class="row justify-content-start" style="padding-top:10px;">
                <div class="col" style="padding-top:10px;">
<a href="#"><img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="assets/img/images/email.jpeg"  onclick="sendmail()"/></a>
                </div>
                <div class="col" style="padding-top:10px;">
<a href="#"><img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="assets/img/images/location.jpeg" /></a>
                </div>
                <div class="col" style="padding-top:10px;">
<a href="#"><img alt="Image html" width="90%" height="90%" style="max-height:500px;max-width:500px;" src="assets/img/images/update.jpeg" /></a>
                </div>
</div>
</div>
<!--</div>-->
<div class="col justify-content-center" style="padding-top:40px; padding-left:500px;">
           <p>______________________________________________</p>
           <h1>&nbspWhy Choose Us</h1>
           <p>______________________________________________</p>
</div>
<div class="row justify-content-start"style="padding-bottom:50px;"> <!-- style="padding-top:20px;"-->
<div class="col justify-content-start" style="padding-top:20px; padding-left:230px;">
           <h1 style="font-weight:bold;">&nbsp&nbsp&nbsp&nbspSafe and Secure</h1>
           <div class="col justify-content-start" style="padding-left:75px;">
                <p>&nbsp&nbspAll your private information<br>&nbsp&nbspis absolutely secure with us.</p>
           </div> 
</div>
<div class="col justify-content-start" style="padding-top:20px; padding-left:-100px;">
           <h1 style="font-weight:bold;">&nbsp&nbsp&nbsp&nbspTrust Worthy</h1>
           <div class="col justify-content-start" style="padding-left:50px;">
                <p>Determined to provide protection<br>&nbsp&nbspto women across the world.</p>
           </div> 
</div>
</div>
</body>
<script>
     function sendmail()
     {
          alert("Email sent to the user");
     }
     function sms()
     {
          alert("Message Sent");
     }
     function sos()
     {
          alert("SOS Successful");
     }
     function calling()
     {
          alert("Calling");
     }

</script>
</html>
