<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/Daerah-style.css')}}">
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
                        <img src="{{asset('img\Logo.png')}}">
                    </div>
                    <div class="search">
                        <label>
                            <input class="kotak_search" type="text" required placeholder="Search Here">		
                                <div class="search_gb">
                                    <input class="button" type="image" src="{{asset('img\search.png')}}" value="Cari">
                                </div> 
                        </label>
                    </div>
                </div>
            </div>

            <div class="kategori">
                <a id="judul_kat">Kalimantan</a>
                <a id="sub_judul">“Kalimantan people have never felt an earthquake”</a>
                @foreach($kalimantans as $kalimantan)
                <div class="makanan1">
                    <div class="kotak_daerah">
                        <a href="/rpl-tuman/public/article/kalimantan/{{$post->slug}}"><img src="{{asset('img/rek2.png')}}"></a>
                        <a id="daerah">{{$kalimantan->tittle}}</a>
                        <a id="tanggal">{{$kalimantan->created_at->format('d/m/Y')}}</a>
                        <a href="/rpl-tuman/public/article/kalimantan/{{$post->slug}}" id="more">Read More ›</a>
                    </div>
                </div>
                @endforeach
                
            </div>

            <div class="footer">
                <a id="privacy">© Copyright 2020  Privacy-terms</a>
                <a href="#" id="tentang">About</a>
                <a id ="follow">Follow us</a>
                <div class="sosmed">
                    <a href="#"><img src="{{asset('img\ig.png')}}"></a>
                    <a href="#"><img src="{{asset('img\twittwr.png')}}"></a>
                </div>
            </div>
          

            </div>
            
        </header>
    </div>
</body>

</html>