<!DOCTYPE html>
<html>
    <head>
        <title>Women Safety Application</title>
        <link href="css/login.css" rel="stylesheet">
    </head>
    <body>
        <div class = "logo">
            <div class = "wallpaper"></div>
       </div>
        <div class="hero"></div>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>  
            </div>
            @if(session()->has('success'))
          <div class="success">
            <ul>
              <li>{{session('success')}}</li>
            </ul>
          </div>
          @endif
          @if(session()->has('error'))
          <div class="error">
            <ul>
              <li>{{session('error')}}</li>
            </ul>
          </div>
          @endif
            <form action="/Login/CheckCredentials"  method="post" role="form" class = "input-group input-group-login" id="login">
              {{ csrf_field() }}
                <input type = "email" class="input-field" placeholder="Email ID" required name="UserEmail"/>
                <input type = "password" class="input-field" placeholder="Enter password" required name="UserPass"/>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>
            <form action="/Registration/GbsUserStore"  method="post" role="form" class = "input-group input-group-reg" id="register">
              {{ csrf_field() }}
                <!-- User creds-->
               
                <input type = "text" class="input-field col1" placeholder="First Name" required name="fname" />
                <input type = "text" class="input-field col2" placeholder="Last Name" required name="lname" />
                <input placeholder="Email"  name="email" type="email" class="input-field col1" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="please enter valid email address">
                <input type = "tel" class="input-field col2" placeholder="Phone Number" required name="phn" />
                <input type = "password" class="input-field" placeholder="Enter password" required name="pass"/>

                <!--Emergency contacts-->
                
                    <br><br><label><b>Enter details of any three Emergency contacts:- </b></label><br>
                    <input type = "text" class="input-field col1" placeholder="Name" required name="f1name"/>
                    <input type = "email" class="input-field col1" placeholder="Email ID" required name="f1email"/>
                    <input type = "text" class="input-field col1" placeholder="Phone Number" required name="f1phn"/>
                    <br>
                    <input type = "text" class="input-field col1" placeholder="Name" required name="f2name"/>
                    <input type = "email" class="input-field col1" placeholder="Email ID" required name="f2email"/>
                    <input type = "text" class="input-field col1" placeholder="Phone Number" required name="f2phn"/>
                    <br>
                    <input type = "text" class="input-field col1" placeholder="Name" required name="f3name"/>
                    <input type = "email" class="input-field col1" placeholder="Email ID" required name="f3email"/>
                    <input type = "text" class="input-field col1" placeholder="Phone Number" required name="f3phn"/>
                 
                
                <input type="checkbox" class="check-box" required><span>I agree to the terms and conditions *</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>

        <script>
            var loginBtn = document.getElementById("login");
            var registerBtn = document.getElementById("register");
            var submitBtn = document.getElementById("btn"); 

            function register(){
                loginBtn.style.left="-650px";
                registerBtn.style.left="50px";
                submitBtn.style.left="110px";
            }

            function login(){
                loginBtn.style.left="50px";
                registerBtn.style.left="750px";
                submitBtn.style.left="0px";
            }
        </script>
    </body>
</html>