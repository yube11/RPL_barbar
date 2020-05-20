<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/regis-style.css')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/LOGO.png')}}">
        <tittle></tittle>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="tab">
                <div class="kotak_tab">
                    <div class="menu"></div>
                    <div class="logo">
                        <a href=""><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Logo.png"></a>
                    </div>
                </div>
            </div>

            <div class="signup">
                <a id="judul_signup">Edit Your Account</a>
                
                <form method = "POST" action="/rpl-tuman/public/profile/{{auth()->user()->id}}/edit">
                    {{csrf_field()}}
                    <input id="first-name" class="kotak_fn" type="text" name="first_name" autocomplete="off" placeholder="FIRST NAME" value="{{$user->first_name}}"  required />
                    <input id="last-name" class="kotak_ln" type="text" name="last_name" autocomplete="off" placeholder="LAST NAME" value="{{$user->last_name}}" required />
                    <input id="user-name" class="kotak_username" type="text" name="username" autocomplete="off" placeholder="USERNAME" value="{{$user->username}}" required />
                    <input id="user-email" class="kotak_email" type="email" name="email" autocomplete="off" placeholder="EMAIL" value="{{$user->email}}" required />
                    <input id="user-password" class="kotak_pass" type="password" name="password" placeholder="PASSWORD" required />
                    <input id="konfirm-password" class="konfirm" type="password" name="password_confirmation" placeholder="CONFIRM PASSWORD" required />
                    <input id="submit-btn" type="submit" name="submit" value="      UPDATE ACCOUNT" />
               
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

            </div>
            
        </header>
    </div>
</body>

</html>