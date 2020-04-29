<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
</head>
<style type="text/css">
  html, body{
    height: 100%;
}

body{
    margin: 0;
    background-color: white;
    font-family: Gilroy;
    font-style: normal;
}

a{
    text-decoration: none;
    color: #000000;  
}

input{
    font-family: "Gilroy";
    font-weight: 800;
    font-size: 18px;
    line-height: 22px;
    display: flex;
    align-items: center;
    letter-spacing: 0.1em;
    color: #F7941E;
}

.wrapper{
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
}

.tab{ 
    position: absolute;
    width: 1440px;
    height: 116px;
    left: 0px;
    top: 0px;
}

.kotak_tab{
    width: 1440px;
    height: 116px;
    background: #FAFAFAFA;
}

.menu{
    position: relative;
    width: 455.87px;
    height: 28.63px;
    left: 492px;
    top: 44px;
    display: flex;
    justify-content:space-between;
}

.tulisan_tab{
    margin-left: 486px;
    margin-top: 49.535px;
    width: 468px;
    display: flex;
    justify-content:space-between;
}

.logo{
    position: relative;
    width: 76px;
    height: 73.29px;
    left: 75px;
    top: -8px;
}

.login{
    position: absolute;
    width: 1134px;
    height: 515px;
    left: 151px;
    top: 166px;
}

#judul_login{
    position: absolute;
    left: 0%;
    right: 32.72%;
    top: 0%;
    bottom: 86.6%;
    font-weight: 800;
    font-size: 56px; 
    color: #000000;
}

#subtitle_login{
    position: absolute;
    left: 0.09%;
    right: 53.35%;
    top: 14.37%;
    bottom: 80.58%;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #000000;
}

.vektor{
    position: absolute;
    left: 57.85%;
    right: 0%;
    top: 4.66%;
    bottom: 1.17%;
}

.kotak_un{
    position: absolute;
    padding: 23px;
    width: 529px;
    height: 69px;
    left: 0%;
    right: 53.35%;
    top: 32.23%;
    bottom: 54.37%;
    border: 3px solid #F7941E;
    box-sizing: border-box;
    border-radius: 5px;
}

.kotak_pass{
    position: absolute;
    padding: 23px;
    width: 529px;
    height: 69px;
    left: 0%;
    right: 53.35%;
    top: 53.01%;
    bottom: 33.59%;
    border: 3px solid #F7941E;
    box-sizing: border-box;
    border-radius: 5px;
}

.submit-btn{
    position: absolute;
    width: 351px;
    height: 69px;
    left: 6.17%;
    right: 62.87%;
    top: 77.67%;
    bottom: 8.93%;
    background: #F7941E;
    border-radius: 40px;
}

#create{
    position: absolute;
    left: 8.11%;
    right: 79.01%;
    top: 95.15%;
    bottom: 0%;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #000000;
}

#create:hover {
    color:#F7941E;
}

#forget{
    position: absolute;
    left: 21.6%;
    right: 65.34%;
    top: 95.15%;
    bottom: 0%;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #000000;
}

#forget:hover {
    color:#F7941E;
}

#menu:hover {
    color:#F7941E;
}

#submit-btn {
    font-weight: 800;
    font-size: 24px;
    line-height: 29px;
    position: absolute;
    width: 351px;
    height: 69px;                    
    left: 6.17%;
    right: 62.87%;
    top: 77.67%;
    bottom: 8.93%;
    background: #F7941E;
    border-radius: 40px;
    border: none;
    cursor: pointer;
    color: white;
    font-family: "Gilroy";
    margin: 0 auto;
    transition: 0.25s;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #F7941E;
}
::-webkit-input-placeholder{
    font-family: "Gilroy";
    font-weight: 800;
    font-size: 18px;
    line-height: 22px;
    display: flex;
    align-items: center;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #F7941E;
}

.footer{
    position: absolute;
    width: 1440px;
    height: 80px;
    left: 0px;
    top: 770px;
    background-color: #231F20;
}

#privacy{
    position: relative;
    left: 75.56%;
    right: 5.21%;
    top: 41.25%;
    bottom: 41.25%;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    text-align: center;
    color: #FAFAFA;
}

#tentang{
    position: absolute;                    
    width: 51px;
    height: 25px;
    left: 75px;
    top: 15px;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #FAFAFA;
}

#follow{
    position: absolute;
    width: 76px;
    height: 25px;
    left: 75px;
    top: 40px;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #FAFAFA;
}

.sosmed{
    position: absolute;
    width: 92px;
    height: 29px;
    left: 158px;
    top: 36px;
    margin-left: 10px;
}
</style>
<body>
<div class="font">
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
                        <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Logo.png">
                    </div>
                </div>
            </div>

            <div class="login">
                <a id="judul_login">Login for Tuman</a>
                <a id="subtitle_login">Good! You are lucky already have an account</a>
                <div class="vektor">
                    <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Vector.png">
                </div>

                @if(isset(Auth::user()->email))
                  <script>window.location={{url('/login/successlogin')}}</script>
                @endif

                @if($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                  <strong>{{$message}}</strong>
                </div>
                @endif

                @if(count($errors)>0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                <form method="POST" action="{{url('/login/checklogin')}}">
                  {{csrf_field()}}
                    <input id="user-email" class="kotak_un" type="email" name="email" autocomplete="on" placeholder="EMAIL" required />
                    <input id="user-password" class="kotak_pass" type="password" name="password" placeholder="PASSWORD" required />
                    <input id="submit-btn" type="submit" name="submit" value="               LOGIN" />
                    
                    <a href="{{url('/regist')}}" id="create">Create Account</a>
                    <a id="create" style= margin-left:140px;>|</a>
                    <a href="#" id="forget">Forgot Password?</a>
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
</div>
</body>

</html> 
</html>