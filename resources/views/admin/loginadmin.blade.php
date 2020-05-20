<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http.equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login-style.css')}}">
    <title></title>
</head>
<style type="text/css">

</style>
<body>
    <div class="font">
        <div class="wrapper">
            <header>
                <div class="tab">
                    <div class="kotak_tab">
                        <div class="menu"></div>
                        <div class="logo">
                            <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Logo.png">
                        </div>
                    </div>
                </div>

                <div class="login">
                    <a id="judul_login">Login for Admin</a>
                    <a id="subtitle_login"></a>
                    <div class="vektor">
                        <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Vector.png">
                    </div>
                    <form method="POST" action="{{route('admin.login.submit')}}">
                      {{csrf_field()}}
                      <input id="user-email" class="kotak_un" type="email" name="email" autocomplete="on" placeholder="EMAIL" required />
                      <input id="user-password" class="kotak_pass" type="password" name="password" placeholder="PASSWORD" required />
                      <input id="submit-btn" type="submit" name="submit" value="               LOGIN" />
                     </form>
                </div>

                <div class="footer">
                    <a id="privacy">© Copyright 2020  Privacy-terms</a>
                    <a href="#" id="tentang">About</a>
                    <a id ="follow">Follow us</a>
                    <div class="sosmed">
                        <a href="#"><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/ig.png"></a>
                        <a href="#"><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/twittwr.png"></a>
                    </div>
                </div>
            </header> 
        </div>
    </div>
</body>
</html>