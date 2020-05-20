<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/Profil-style.css')}}">
        <tittle></tittle>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="tab">
                <div class="kotak_tab">
                    <div class="menu">
                        <a id="menu" href="{{route('dashboard')}}">Home</a>
                        <a id="menu" href="{{url('/article')}}">Article</a>
                        <a id="menu" href="{{url('/askroom')}}">Ask Room</a>
                        <a id="menu-active" href="{{url('/profile')}}">Profile</a>
                    </div>
                    <div class="garis"></div>
                    <div class="logo">
                        <img src="img\Logo.png">
                    </div>
                    <div class="search">
                        <label>
                            <input class="kotak_search" type="text" required placeholder="Search Here">		
                                <div class="search_gb">
                                    <input class="button" type="image" src="img\search.png" value="Cari">
                                </div> 
                        </label>
                    </div>
                </div>
            </div>

            <div class="batas">
                <div class="kotak"></div>
                <div class="fotoprofil">
                    <img src="img\profil.png">
                </div>
                <a id="nama">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</a>
                <a id="username">{{auth()->user()->username}}</a>
                <a id="create">{{auth()->user()->created_at->format('d/M/Y')}}</a>
                <div class="joined">
                    <img src="img\joined.png">
                </div>
                <div class="kotakedit">
                    <a href="/rpl-tuman/public/profile/{{auth()->user()->id}}/edit" id="edit">EDIT</a>
                </div>
                <div class="kotaklog">
                    <a href="{{url('/logout')}}" id="logout">LOGOUT</a>
                </div>
            </div>
            

            <div class="footer">
                <a id="privacy">© Copyright 2020  Privacy-terms</a>
                <a href="#" id="tentang">About</a>
                <a id ="follow">Follow us</a>
                <div class="sosmed">
                    <a href="#"><img src="img\ig.png"></a>
                    <a href="#"><img src="img\twittwr.png"></a>
                </div>
            </div>
          

            </div>
            
        </header>
    </div>
</body>

</html>
