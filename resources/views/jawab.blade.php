<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/Jawab-style.css')}}">
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
                <div class="kotak1">
                    <div class="pertanyaan">
                        <div class="fotoprofilus">
                            <img src="{{asset('img\dpkecil.png')}}">
                        </div>
                        <a id="namaus">{{$forum->user->username}}</a><br>
                        <a id="tanggalus">{{$forum->created_at}}</a><br>
                        <a id="isius">{{$forum->konten}}</a>    
                        <form action="{{url('/jawab')}}" method="POST">
                            {{csrf_field()}}
                            <textarea class="kotakjawab" id="kotakjawab" name="konten" type="text" placeholder="Answer Here...."></textarea>
                            <input id="submit-btn" type="submit" name="submit" value="SEND" required/>
                        </form>
                    </div>
                </div>

                <div class="kotak2">
                    <a id="juduljawaban">Jawaban</a>
                    <div class="scroll">
                        <div class="jawaban">
                            <div class="fotoprofil">
                                <img src="{{asset('img\dpkecil.png')}}">
                            </div>
                            <a id="nama">Lorem Ipsum</a><br>
                            <a id="tanggal">10/10/2020</a><br>
                            <a id="isi">Lorem ipsum dolor sit amet, consectetur adipisci elit. Mnas dictum nisi et massa lobortis, nec ornare nulla bibendum. Sed et convallis nulla, sed tristique.</a>    
                            <textarea id="reply" placeholder="Comment this reply"></textarea>
                            
                        </div>
                        <div class="jawabanreply">
                            <div class="fotoprofil">
                                <img src="{{asset('img\dpkecil.png')}}">
                            </div>
                            <a id="nama">Lorem Ipsum</a><br>
                            <a id="tanggal">10/10/2020</a><br>
                            <a id="isireply">Lorem ipsum dolor sit amet, consectetur adipisci elit. Mnas dictum nisi et massa lobortis, nec ornare nulla bibendum. Sed et convallis nulla, sed tristique.</a>    
                            <textarea id="replyreply" placeholder="Comment this reply"></textarea>
                        </div>
                    </div>
                 </div>
                 <br />   
            </div>
        </header>
    </div>
</body>

</html>