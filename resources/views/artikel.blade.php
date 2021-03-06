<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/artikel-style.css')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/LOGO.png')}}">
        <tittle></tittle>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="tab">
                <div class="kotak_tab">
                    <div class="menu">
                        <a id="menu" href="{{route('dashboard')}}">Home</a>
                        <a id="menu-active" href="{{url('/article')}}">Article</a>
                        <a id="menu" href="{{url('/askroom')}}">Ask Room</a>
                        <a id="menu" href="{{url('/profile')}}">Profile</a>
                    </div>
                    <div class="garis"></div>
                    <div class="logo">
                        <img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/Logo.png">
                    </div>
                    
                    <div class="search">
                        <label>
                            <input class="kotak_search" type="text" required placeholder="Search Here">		
                                <div class="search_gb">
                                    <input class="button" type="image" src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/search.png" value="Cari">
                                </div> 
                        </label>
                    </div>
                </div>
            </div>

            <div class="populer">
                <a id="judul_populer">Popular Articles for You</a>
                <a id="subtitle_populer">"Popular things make you not outdated, try it now"</a>

                <div class="artikel1">
                    <div class="kotak_a1">
                        <a id="asal">Sulawesi</a>
                        <a href ="{{url('/article')}}" id="artikel1">How to Make Coto Makassar</a>
                        <a href ="{{url('/article')}}" id="read_more">Read More</a>
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

            <div class="kategori">
                <a id="judul_kat">What is the result of 3 + 3?</a>
                <a id="sub_judul">“Yes six, so here are six recipe categories you can see based on six main islands in Indonesia” </a>
                <div class="sumatera">
                    <div class="kotak_daerah">
                        <a href="{{url('/article/sumatera')}}"><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/kat1.png"></a>
                        <a id="daerah">Sumatera</a>
                        <a href="{{url('/article/sumatera')}}" id="more">See More ›</a>
                    </div>
                </div>
                <div class="jawa">
                    <div class="kotak_daerah">
                        <a href="{{url('/article/jawa')}}"><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/kat2.png"></a>
                        <a id="daerah">Jawa</a>
                        <a href="{{url('/article/jawa')}}" id="more">See More ›</a>
                    </div>
                </div>
                <div class="kalimantan">
                    <div class="kotak_daerah">
                        <a href="{{url('/article/kalimantan')}}"><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/kat3.png"></a>
                        <a id="daerah">Kalimantan</a>
                        <a href="{{url('/article/kalimantan')}}" id="more">See More ›</a>
                    </div>
                </div>
                <div class="nusa_tenggara">
                    <div class="kotak_daerah">
                        <a href="{{url('/article/nusatenggara')}}"><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/kat4.png"></a>
                        <a id="daerah">Nusa Tenggara</a>
                        <a href="{{url('/article/nusatenggara')}}" id="more">See More ›</a>
                    </div>
                </div>
                <div class="sulawesi">
                    <div class="kotak_daerah">
                        <a href="{{url('/article/sulawesi')}}"><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/kat5.png"></a>
                        <a id="daerah">Sulawesi</a>
                        <a href="{{url('/article/sulawesi')}}" id="more">See More ›</a>
                    </div>
                </div>
                <div class="papua">
                    <div class="kotak_daerah">
                        <a href="{{url('/article/papua')}}"><img src="https://raw.githubusercontent.com/yube11/RPL_barbar/master/html/img/kat6.png"></a>
                        <a id="daerah">Papua</a>
                        <a href="{{url('/article/papua')}}" id="more">See More ›</a>
                    </div>
                </div>
                
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