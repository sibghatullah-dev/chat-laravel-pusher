<html>
    <head>
        <style>
            body{
  background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6), url(https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/reference_guide/cats_and_excessive_meowing_ref_guide/1800x1200_cats_and_excessive_meowing_ref_guide.jpg));
  height: 100vh;
  background-size: cover;
  background-position: center;
}
.login-page{
  width: 360px;
  padding: 10% 0 0;
  margin: auto;
}
.form{
  position: relative;
  z-index: 1;
  background: rgba(7, 40, 195, 0.8);
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}
.form input{
  outline: 1;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button{
  text-transform: uppercase;
  outline: 0;
  background: #4caf50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
}
.form button:hover, .form button:active{
  background: #43a047;
}
.form .message{
  margin: 0 0 15px;
  color: aliceblue;
  font-size: 12px;
}
.form .message a{
  text-decoration: none;
  color: #4caf50;
}
.form .register-form{
  display: none;
}
        </style>
    </head>

    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form">
                    <input type="email" placeholder="Email"/>
                    <input type="text" placeholder="user name"/>
                    <input type="password" placeholder="password"/>
                    <button>Registered</button>
                    <p class="message">Already Registered? <a href="#">Login</a></p>
                  </form>
            </div>
          </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow")
        })
    </script>
</html>
