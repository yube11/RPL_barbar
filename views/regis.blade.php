<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/regis-style.css')}}">
        <tittle></tittle>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="tab">
                <div class="kotak_tab">
                    <div class="menu">
                        <a id="menu" href="Landing.html">Home</a>
                        <a id="menu" href="#">Article</a>
                        <a id="menu" href="#">Ask Room</a>
                        <a id="menu" href="#">Profile</a> 
                    </div>
                    <div class="logo">
                        <a href=""><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Logo.png"></a>
                    </div>
                </div>
            </div>

            <div class="signup">
                <a id="judul_signup">Signup for Tuman</a>
                <a id="subtitle_signup">One step closer to enjoy this website</a>
                <form method = "POST" action = {{route('registrasi')}}>
                    {{csrf_field()}}
                    @if($errors->has('first_name'))
                        <div class="invalid-feedback">
                            {{$errors->first('first_name')}}
                        </div>
                    @endif
                    <input id="first-name" class="kotak_fn" type="text" name="first-name" autocomplete="off" placeholder="FIRST NAME" required />
                    <input id="last-name" class="kotak_ln" type="text" name="last-name" autocomplete="off" placeholder="LAST NAME" required />
                    @if($errors->has('last_name'))
                        <div class="invalid-feedback">
                            {{$errors->first('last_name')}}
                        </div>
                    @endif
                    <input id="user-name" class="kotak_username" type="text" name="username" autocomplete="off" placeholder="USERNAME" required />
                    @if($errors->has('username'))
                        <div class="invalid-feedback">
                            {{$errors->first('username')}}
                        </div>
                    @endif
                    <input id="user-email" class="kotak_email" type="email" name="email" autocomplete="off" placeholder="EMAIL" required />
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                    <input id="user-password" class="kotak_pass" type="password" name="password" placeholder="PASSWORD" required />
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{$errors->first('password')}}
                        </div>
                    @endif
                    <input id="konfirm-password" class="konfirm" type="password" name="password_confirmation" placeholder="CONFIRM PASSWORD" required />
                    @if($errors->has('password_confirmation'))
                        <div class="invalid-feedback">
                            {{$errors->first('password_confirmation')}}
                        </div>
                    @endif
                    <input id="submit-btn" type="submit" name="submit" value="      CREATE ACCOUNT" />
                    <a href="{{url('/login')}}" id="haveacc">Already have an account?</a>
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
