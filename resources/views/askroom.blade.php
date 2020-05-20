<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http.equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/askroom-style.css')}}">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="tab">
                <div class="kotak_tab">
                    <div class="menu">
                        <a id="menu" href="{{route('dashboard')}}">Home</a>
                        <a id="menu" href="{{url('/article')}}">Article</a>
                        <a id="menu-active" href="{{url('/askroom')}}">Ask Room</a>
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
            
            <div class="recent">
                <a id="judul">Recent Question</a>
                <a id="sub">“Answer the question and colect 5 point”</a>
                @foreach($forum as $form)
                <div class="border">
                    <div class="que">
                        <img  src="{{asset('img\dp.png')}}">
                        <a id="nama">{{$form->user->username}}</a>
                        <a id="tanggal">{{$form->created_at->diffForHumans()}}</a>
                        <a id="isi">{{$form->judul}}</a>
                        <div class="jawab">
                            <a href="/rpl-tuman/public/askroom/{{$form->id}}/view" id="jawab">JAWAB</a>
                        </div>
                       <!-- <div class="garisbtas"></div>-->
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

            
            <div class="batas">
                <div class="kotak"></div>
                <a id="ask">Ask Your Question Here</a>
                <div class="tambah">
                    <img hrf="#popup1" src="{{asset('img\tambah.png')}}">
                    <div class="box">
                        <a id="link" href="#popup1">ssssss</a>
                    </div>

                    <div id="popup1" class="overlay">
                        <div class="popup">
                            <form method="POST" action="{{url('/askroom/create')}}">
                                {{csrf_field()}}
                                <div>
                                    <input type="text" name="judul" placeholder="JUDUL" class="kotakask1" required="">
                                </div>
                                <div >
                                    <textarea type="text" name="konten" placeholder="PERTANYAAN" class="kotakask" required=""></textarea> 
                                </div>
                            <input id="submit-btn" type="submit" name="submit" value="SUBMIT" required/>
                            <a class="close" href="#">&times;</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header>
    </div>
</body>
</html>