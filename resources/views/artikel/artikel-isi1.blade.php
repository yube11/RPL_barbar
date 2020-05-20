<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http.equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/artikel-isi-style.css')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/LOGO.png')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
        <div class="isi">
            <a id="judul">{{$sumatera->tittle}}</a>
            <a id="writer">{{$sumatera->admin->nama}}, {{$sumatera->created_at->format('d/m/Y')}}</a>
            <div class="gb"><img src="{{asset('img\Artikel.png')}}"></div>
            <div class="prep"><img src="{{asset('img\Prep.png')}}"></div>
            <div class="cook"><img src="{{asset('img\Cook.png')}}"></div>
            <div class="total"><img src="{{asset('img\Total.png')}}"></div>
            <a id="waktu">{!!$sumatera->note!!}</a>

            <div class="batass">
                <a id="ingredients">Ingredients</a>
                <a id="bahan">
                 <p>{!!$sumatera->Ingredients!!}</p>                  
             </a>
             <br>
             <a id="instruction">Instruction </a>
             <div class="kotak_langkah">
                <a id="langkah">
                 <p>{!!$sumatera->Instruction!!}</p>                     
             </a>
             <br><br>
             <a id="kasih_rate">Give us your rate for this article</a>
             <div class="rate">
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Not Bad - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Not Bad - 3 stars"></label>
                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Hmm - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Hmm - 2 stars"></label>
                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="It's Bad - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="It's Bad - 1 star"></label>
                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Fucking Bad - 0.5 stars"></label>
                </fieldset>
            </div> 

            <div class="share_gb">
                <a href="http://www.facebook.com/sharer.php?u=https://tuman.com" target="_blank"><img src="{{asset('img\fbshare.png')}}"></a>
                <a href="https://twitter.com/share?url=https://tuman.com&amp;text=Find%20Your%20Recipe" target="_blank"><img src="{{asset('img\twshare.png')}}"></a>
                <a href="#"><img src="{{asset('img\igshare.png')}}"></a>
            </div>

            <br><br>

            <div class="rekomen">
                <a id="tulisan">You May Also Like</a>
                <div class="rek1">
                   <div class="kotak1">
                    <img src="{{asset('img\rek1.png')}}">
                </div>
                <div class="kotak1">
                    <img src="{{asset('img\rek2.png')}}">
                </div>                        
                <div class="kotak1">
                    <img src="{{asset('img\rek3.png')}}">
                </div>
                <a id="nama1">Halua Kenari</a>
                <a id="nama2">Sop Konro</a>
                <a id="nama3">Pallubasa</a>
            </div>
        </div>
        <br>
        <div class="komen">
            @comments(['model' => $sumatera])
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
</div>
</div>
</header>
</div>
</body>

</html>