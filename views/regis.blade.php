<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="Signup-style.css">
        <tittle></tittle>
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

::-webkit-inner-spin-button{
    width: 1440px;
    height: 116px;
    background: #FAFAFAFA;
}

.wrapper{
    position: absolute;
    width: 100%;
    max-width: 1440rem;
    margin: 0 auto;
}

.tab{ 
    position: absolute;
    width: 1440px;
    height: 116px;
    background: #FAFAFAFA;
}

.kotak_tab{
    position: absolute;
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

.signup{
    position: absolute;
    width: 1134px;
    height: 515px;
    left: 151px;
    top: 166px;
}

#judul_signup{
    position: absolute;
    left: 0%;
    right: 32.72%;
    top: 0%;
    bottom: 86.6%;
    font-weight: 800;
    font-size: 56px;
    line-height: 69px;
    color: #000000;
}

#subtitle_signup{
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


.kotak_fn{
    padding: 23px;
    position: absolute;
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

.kotak_ln{
    padding: 23px;
    position: absolute;
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

.kotak_username{
    padding: 23px;
    position: absolute;
    width: 529px;
    height: 69px;
    left: 0%;
    right: 53.35%;
    top: 73.79%;
    bottom: 12.81%;
    border: 3px solid #F7941E;
    box-sizing: border-box;
    border-radius: 5px;
}

.kotak_email{
    padding: 23px;
    position: absolute;
    width: 529px;
    height: 69px;
    left: 53.9%;
    right: -1.91%;
    top: 32.23%;
    bottom: 54.37%;
    left: 53.9%;
    border: 3px solid #F7941E;
    box-sizing: border-box;
    border-radius: 5px;
}

.kotak_pass{
    padding: 23px;
    position: absolute;
    width: 529px;
    height: 69px;
    left: 53.9%;
    right: -1.91%;
    top: 53.01%;
    bottom: 33.59%;
    border: 3px solid #F7941E;
    box-sizing: border-box;
    border-radius: 5px;
}

.konfirm{
    padding: 23px;
    position: absolute;
    width: 529px;
    height: 69px;
    left: 53.9%;
    right: -1.91%;
    top: 73.79%;
    bottom: 12.81%;
    border: 3px solid #F7941E;
    box-sizing: border-box;
    border-radius: 5px;
}

.create{
    width: 351px;
    height: 69px;
    position: absolute;
    left: 35.3%;
    right: 32.85%;
    top: 98%;
    bottom: -5.5%;
    background: #F7941E;
    border-radius: 40px;
}

#haveacc{
    position: absolute;
    width: 220px;
    height: 25px;
    left: 471px;
    top: 595px;
    font-family: Gilroy;
    font-style: normal;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #000000;
    
}

#haveacc:hover {
    color:#F7941E; 
}

#menu:hover {
    color:#F7941E;  
}

#submit-btn {
    width: 351px;
    height: 69px;
    position: absolute;
    left: 35.3%;
    right: 32.85%;
    top: 98%;
    bottom: -5.5%;
    background: #F7941E;
    border-radius: 40px;
    font-weight: 800;
    font-size: 24px;
    line-height: 29px;
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
    top: 870px;
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
                <form method = post action = Home-login.html>
                    <input id="first-name" class="kotak_fn" type="text" name="firstname" autocomplete="off" placeholder="FIRST NAME" required />
                    <input id="last-name" class="kotak_ln" type="text" name="lastname" autocomplete="off" placeholder="LAST NAME" required />
                    <input id="user-name" class="kotak_username" type="text" name="username" autocomplete="off" placeholder="USERNAME" required />
                    <input id="user-email" class="kotak_email" type="email" name="email" autocomplete="off" placeholder="EMAIL" required />
                    <input id="user-password" class="kotak_pass" type="password" name="password" placeholder="PASSWORD" required />
                    <input id="konfirm-password" class="konfirm" type="password" name="konfirmpassword" placeholder="CONFIRM PASSWORD" required />
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