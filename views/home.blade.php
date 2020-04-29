<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="Landing-style.css">
        <tittle></tittle>
</head>
<style type="text/css">
	html, body{
    height: 100%;
}

body{
    margin: 0;
    background-color: var(--background_color_one);
    font-family: Gilroy;
    font-family: Gilroy;
    font-style: normal;
}

a{
    text-decoration: none;
    color: #000000;  
}

.tab_{
    margin-left:45px;
}

.wrapper{
    width: 100%;
    max-width: 1440rem;
    margin: 0 auto;
}

#menu:hover {
    color:#F7941E;  
}

#menu-active {
    color:#F7941E;  
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

.tab_login{
    position: absolute;
    left: 83.96%;
    right: 6.32%;
    top: 33.62%;
    bottom: 33.05%;
}

.kotak_tab_login{
    position: absolute;
    left: -2.86%;
    right: -4.29%;
    top: -2.5%;
    bottom: -10%;
    border: 1px solid #F7941E;
    box-sizing: border-box;
    border-radius: 5px;
}

#kotak_tab_login:hover{
    box-shadow: 0px 1px 5px  #F7941E;
}

#tab_login{
    position: relative;
    height: 21px;
    left: 44px;
    right: 42px;
    top: 10px;
    font-weight: 300;
    font-size: 18px;
    line-height: 21px;
    display: flex;
    align-items: center;
    text-align: center;
    text-transform: uppercase;
    color: #F7941E;
}

.home{
    position: absolute;
    width: 1440px;
    height: 700px;
    left: 0px;
    top: 116px;
    background-color: #F1F1F2;
}

.garis{
    position: absolute;
    width: 79px;
    height: 2px;
    left: 475px;
    top: 70px;
    background: #F7941E;
}

.search{
    position: absolute;
    width: 440px;
    height: 72px;
    left: 85px;
    top: 412px;
}

.kotak_search{
    padding-left: 25px;
    width: 415px;
    height: 72px;
    background: #FFFFFF;
    border: 1px solid #E7E7E7;
    border-radius: 5px;
}

.search_gb{
    position: absolute;
    width: 20px;
    height: 20px;
    left: 393px;
    top: 26px;
}

::-webkit-input-placeholder{
    font-family: Gilroy;
    font-style: normal;
    font-weight: 300;
    font-size: 18px;
    line-height: 21px;
    color: #F7941E 
}

input{
    font-family: Gilroy;
    font-style: normal;
    font-weight: 300;
    font-size: 18px;
    line-height: 21px;
    color: #F7941E 
}

.vector{
    position: absolute;
    left: 55.07%;
    right: 12.15%;
    top: 16.57%;
    bottom: 15.71%;
}

#judul_home{
    position: absolute;
    width: 612px;
    height: 138px;
    left: 85px;
    top: 177px;
    font-weight: 800;
    font-size: 56px;
    line-height: 69px;

    color: #000000;
}

#subtitle_home{
    position:absolute;
    width: 312px;
    height: 57px;
    left: 85px;
    top: 321px;

    font-weight: 300;
    font-size: 20px;
    line-height: 140.62%;

    color: #000000;
}

.populer{
    position: absolute;
    width: 1440px;
    height: 1031px;
    left: 0px;
    top: 815px;
}

#judul_populer{
    position: absolute;
    left: 35.35%;
    right: 35.35%;
    top: 8.34%;
    bottom: 88.07%;
    font-weight: 300;
    font-size: 32px;
    line-height: 37px;
    text-align: center;
    color: #000000;
}

#subtitle_populer{
    position: absolute;
    left: 35.49%;
    right: 35.42%;
    top: 14.35%;
    bottom: 83.22%;
    font-weight: 300;
    font-size: 18px;
    line-height: 135.94%;
    text-align: center;
    color: #000000;
}

.artikel1{
    position: absolute;
    left: 9.38%;
    right: 9.38%;
    top: 23.67%;
    bottom: 40.45%;
}

.kotak_a1{
    position: relative;
    width: 1170px;
    height: 370px;
    background: #231F20;
}

#artikel1{
    position: absolute;
    left: 478px;
    right: 200px;
    top: 110px;
    bottom: 135px;
    font-weight: 300;
    font-size: 48px;
    line-height: 55px;
    color: #FFFFFF;
}

#asal{
    position: absolute;
    left: 478px;
    right: 646px;
    top: 63px;
    bottom: 287px;
    font-family: Gilroy;
    font-style: normal;
    font-weight: 300;
    font-size: 14px;
    line-height: 140.62%;
    color: #FFFFFF;
}

#read_more{
    position: absolute;
    left: 478px;
    right: 601px;
    top: 295px;
    bottom: 49px;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #FFFFFF
}

#read_more:hover{
    color: #F7941E
}

.artikel_2{
    position: absolute;
    left: 9.38%;
    right: 51.04%;
    top: 63.43%;
    bottom: 8.44%;
    width: 570px;
    height: 290px;
    background: #FAFAFA;
}

#artikel_2:hover{
    background: #FFFFFF;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);
}


#artikel2{
    
    position: absolute;
    width: 474px;
    height: 68px;
    left: 48px;
    right:48px;
    top: 48px;
    bottom: 174px;
    font-weight: 800;
    font-size: 24px;
    line-height: 140.62%;
    color: #000000;
}

#deskripsi2{
    position: absolute;
    left: 48px;
    right:48px;
    top: 132px;
    bottom: 86px;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #000000;
}

#read_more2{
    position: absolute;
    left: 48px;
    right: 451;
    top: 220px;
    bottom: 50px;
    font-weight: 300;
    font-size: 14px;
    line-height: 140.62%;
    color: #000000;
}
#read_more2:hover{
    color: #F7941E
}

.artikel_3{
    position: absolute;
    left: 51.04%;
    right: 9.38%;
    top: 63.43%;
    bottom: 8.44%;
    background: #FAFAFA;
}

#artikel_3:hover{
    background: #FFFFFF;
    box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);
}

#artikel3{
    position: absolute;
    width: 474px;
    height: 68px;
    left: 48px;
    right:48px;
    top: 48px;
    bottom: 174px;
    font-weight: 800;
    font-size: 24px;
    line-height: 140.62%;
    color: #000000;
}

#deskripsi3{
    position: absolute;
    left: 48px;
    right:48px;
    top: 132px;
    bottom: 86px;
    font-weight: 300;
    font-size: 18px;
    line-height: 140.62%;
    color: #000000;
}

#read_more3{
    position: absolute;
    left: 48px;
    right: 451;
    top: 220px;
    bottom: 50px;
    font-weight: 300;
    font-size: 14px;
    line-height: 140.62%;
    color: #000000;
}

#read_more3:hover{
    color: #F7941E
}

.interest{
    position: absolute;
    width: 1440px;
    height: 240px;
    left: 0px;
    top: 1845px;
}

.kotakint{
    width: 1440px;
    height: 240px;
    background: #F7941E;
}

#int1{
    position: relative;
    left: 13.54%;
    right: 55.56%;
    top: 31.67%;
    bottom: 49.58%;
    font-weight: 800;
    font-size: 32px;
    line-height: 140.62%;
    color: #000000;
}

#int2{
    position: absolute;
    left: 13.54%;
    right: 65.42%;
    top: 50.42%;
    bottom: 30.83%;
    font-weight: 300;
    font-size: 32px;
    line-height: 140.62%;
    color: #000000;
}

.log_kuning{
    position: absolute;
    left: 1045px;
    right: 195px;
    top: 96px;
    bottom: 94px;
    border: 1px solid #000000;
    box-sizing: border-box;
    border-radius: 5px;
    width: 200px;
    height: 50px;
}

#log_kuning:hover{
    background-color: #F7941E;
    box-shadow: 0px 1px 18px  #231F20;
}

#logkuning{
    position: absolute;
    height: 25px;
    left: 65px;
    top: 10px;
    font-weight: 300;
    font-size: 18px;
    line-height: 134.77%;
    display: flex;
    align-items: center;
    text-align: center;
    text-transform: uppercase;
    color: #000000;
}

.reg_coklat{
    position: absolute;
    left: 57.57%;
    right: 28.54%;
    top: 40%;
    bottom: 39.17%;
    background: #231F20;
    border-radius: 5px;
    width: 200px;
    height: 50px;
}

#reg_coklat:hover{
    background-color: #231F20;
    box-shadow: 0px 1px 18px  #231F20;
}

#regcoklat{
    position: absolute;
    height: 21px;
    left: 55px;
    top: 13px;
    font-weight: 300;
    font-size: 18px;
    line-height: 21px;
    display: flex;
    align-items: center;
    text-align: center;
    text-transform: uppercase;
    color: #FFFFFF;
}

.about{
    position:absolute;
    width: 1440px;
    height: 700px;
    left: 0px;
    top: 2085px;
    background-color: #FAFAFAFA;
}

#judul_about{
    position: absolute;
    left: 52.08%;
    right: 25.04%;
    top: 31%;
    bottom: 54%;
    font-weight: 800;
    font-size: 64px;
    line-height: 140.62%;
    color: #000000;
}

#subtitle_about{
    position: absolute;
    left: 52.08%;
    right: 10.69%;
    top: 46%;
    bottom: 21.17%;
    font-weight: 300;
    font-size: 20px;
    line-height: 140.62%;
    text-align: justify;
    color: #000000;
}

.about_gb{
    position: absolute;
    left: 130px;
    right: 841px;
    top: 119px;
    bottom: 3px;
}

.footer{
    position: absolute;
    width: 1440px;
    height: 80px;
    left: 0px;
    top: 2886px;
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
                        <a id="menu-active" href="Landing.html">Home</a>
                        <a id="menu" href="#">Article</a>
                        <a id="menu" href="#">Ask Room</a>
                        <a id="menu" href="#">Profile</a> 
                    </div>
                    <div class="garis"></div>
                    <div class="logo">
                        <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Logo.png">
                    </div>
                    <div class="tab_login">
                        <div class="kotak_tab_login" id="kotak_tab_login"> 
                            <a href="{{url('/login')}}" id="tab_login">LOGIN</tab_login></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home">
                <div class="search">
                    <label>
                    <input class="kotak_search" type="text" required placeholder="Search Here">		
                        <div class="search_gb">
                            <input class="button" type="image" src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/search.png" value="Cari">
                        </div> 
                    </label>
                </div>
                <a id="judul_home">Still noob in cooking? Find your recipe here!</a>
                <a id="subtitle_home">Because everything needs recipe even happines</a>
                <div class="vector">
                    <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Vector.png">
                </div>
            </div>

            <div class="populer">
                <a id="judul_populer">Popular Articles for You</a>
                <a id="subtitle_populer">"Popular things make you not outdated, try it now"</a>

                <div class="artikel1">
                    <div class="kotak_a1">
                        <a id="asal">Sulawesi</a>
                        <a href ="#" id="artikel1">How to Make Coto Makassar</a>
                        <a href ="#" id="read_more">Read More</a>
                        <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/A1.png">
                    </div>
                </div>

                <div class="artikel_2" id="artikel_2">
                    <a href="#" id="artikel2">It’s holidays time! Try this recipes to make your holidays more fun!</a>
                    <a href="#" id="deskripsi2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</a>
                    <a href="#" id="read_more2">Read More</a>  
                </div>
                
                <div class="artikel_3" id="artikel_3">
                    <a href="#" id="artikel3">Oh no! Covid-19 attack us. Strengthen your immunity by cooking this food.</a>
                    <a href="#" id="deskripsi3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</a>
                    <a href="#" id="read_more3">Read More</a>
                </div>
                
            </div>

            <div class="interest">
                <div class="kotakint">
                    <a id="int1">You can also ask anything here</a>
                    <a id="int2">Interested to join us?</a>
                </div>
                <div class="log_kuning" id="log_kuning">
                    <a href="{{url('/login')}}" id="logkuning">LOGIN</a>
                </div>
                <div class="reg_coklat" id="reg_coklat">
                    <a href="{{url('/regist')}}" id="regcoklat">REGISTER</a>
                </div>
                
            </div>

            <div class="about">
                <div class="about_gb">
                    <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Vector.png">
                </div>
                <a id="judul_about">About Us</a>
                <a id="subtitle_about">Tuman (Tukang Masak Nusantara) provide recipes from various regions in Indonesia for you. If you feel confused about the recipe, you can clik register button and use ask anything fitur. You can ask anything there and let other user answer your question. You can answer question from other user too and get then get the point. Collect your point!</a>
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