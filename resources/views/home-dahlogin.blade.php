<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http.equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home-dahlogin-style.css')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/LOGO.png')}}">
    <tittle></tittle>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="tab">
                <div class="kotak_tab">
                    <div class="menu">
                        <a id="menu-active" href="{{route('dashboard')}}">Home</a>
                        <a id="menu" href="{{url('/article')}}">Article</a>
                        <a id="menu" href="{{url('/askroom')}}">Ask Room</a>
                        <a id="menu" href="{{url('/profile')}}">Profile</a> 
                    </div>
                    <div class="garis"></div>
                    <div class="logo">
                        <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Logo.png">
                    </div>
                    <div class="tab_logout">
                        <div class="kotak_tab_logout" id="kotak_tab_logout"> 
                            <a href="{{url('/logout')}}" id="tab_logout">LOGOUT</a>
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
            <a id="int2">Try Ask Room feature now!</a>
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