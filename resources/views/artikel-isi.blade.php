<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http.equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/artikel-isi-style.css')}}">
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

            <div class="isi">
                 <a id="judul">How to Make Coto Makassar</a>
                <a id="writer">Sabrina Diza, 20 Agustus 2020</a>
                <div class="gb"><img src="img\Artikel.png"></div>
                <div class="prep"><img src="img\Prep.png"></div>
                <div class="cook"><img src="img\Cook.png"></div>
                <div class="total"><img src="img\Total.png"></div>
                <a id="waktu">Prep : 30 min <br> Cook: 1 hour 30 min <br> Total : 2 hours</a>
                
                <div class="batass">
                    <a id="ingredients">Ingredients</a>
                    <a id="bahan">
                        <li>5 tablespoon cooking oil</li>
                        <li>15 cloves garlic, minced</li>
                        <li>3 lemon grass, chopped and bruised</li>
                        <li>2 inch fresh galangal</li>
                        <li>5 teaspoon coriander powder</li>
                        <li>1 teaspoon ground cumin</li>                                
                        <li>1 tablespoon salt</li>
                        <li>1 tablespoon ground pepper</li>
                        <li>500 gram beef shank </li>
                        <li>500 gram tripe (Indonesian: babat)</li>                   
                    </a>
                    <br>
                    <a id="instruction">Instruction </a>
                    <div class="kotak_langkah">
                        <a id="langkah">
                            <li>In a soup pot, heat cooking oil and fry the garlic, lemon grass, glangal, coriander, cumin, salt, and ground pepper until fragrant, about 3-5 minutes.</li>
                            <li>Add beef shank, tripe, and water and bring to a boil. Reduce heat and simmer for 30 minutes.</li>
                            <li>Remove the beef and tripe and cut into bite size pieces. Return to the pot and bring to another boil. Simmer for 1 hour until tender.</li>
                            <li>Heat the cooking oil in a frying pan and fry the red chilies, Thai chilies, shallots, and garlic until fragrant, about 3 minutes. Remove from the pan.</li>                                        
                            <li>Combine fried chilies, shallots, garlic, and tauco in a food processor and grind to a smooth paste to make sambal tauco.</li>                      
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
                            <img src="img\fbshare.png">
                            <img src="img\twshare.png">
                            <img src="img\igshare.png">
                        </div>
                        
                        <br><br>

                        <div class="rekomen">
                            <a id="tulisan">You May Also Like</a>
                            <div class="rek1">
                                 <div class="kotak1">
                                    <img src="img\rek1.png">
                                </div>
                                <div class="kotak1">
                                    <img src="img\rek2.png">
                                </div>                        
                                <div class="kotak1">
                                    <img src="img\rek3.png">
                                </div>
                                <a id="nama1">Halua Kenari</a>
                                <a id="nama2">Sop Konro</a>
                                <a id="nama3">Pallubasa</a>
                            </div>
                        </div>
                        <br>
                        <div class="komen">
                            <a id="judulkom">Leave Your Comment</a>
                            <textarea class="kotakkom" id="kotakkom" type="text" placeholder="Comment here..."></textarea>
                            <input id="submit-btn" type="submit" name="submit" value="SUBMIT"/>
                        </div>
                        <br>
                        <div class="batas"></div>
                        <br><br><br>
                        <a id="judulkomentar">Comments</a>
                        <br><br><br><br>
                        <div class="komentar1">
                            <div class="fotoprofil">
                                <img src="img\dp.png">
                            </div>
                            <a id="nama">Sabrina Diza Ganteng</a> 
                            <a id="tanggal">15/04/2020</a>                                   
                            <a id="isikomentar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum nisi et massa lobortis, nec ornare nulla bibendum.  Sed et convallis nulla, sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum nisi et massa lobortis, nec ornare nulla bibendum.  Sed et convallis nulla, sed tristique.</a> 
                        </div>
                        <br><br>
                        <div class="komentar2">
                            <div class="fotoprofil">
                                <img src="img\dp.png">
                            </div>
                            <a id="nama">Syukriyatul Hanifa</a> 
                            <a id="tanggal">10/04/2020</a>                                   
                            <a id="isikomentar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum nisi et massa lobortis, nec ornare nulla bibendum.  Sed et convallis nulla, sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum nisi et massa lobortis, nec ornare nulla bibendum.  Sed et convallis nulla, sed tristique.</a> 
                        </div>
                        <br><br>
                         <div class="komentar2">
                            <div class="fotoprofil">
                                <img src="img\dp.png">
                            </div>
                            <a id="nama">Yudha Berlian</a> 
                            <a id="tanggal">20/04/2020</a>                                   
                            <a id="isikomentar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum nisi et massa lobortis, nec ornare nulla bibendum.  Sed et convallis nulla, sed tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum nisi et massa lobortis, nec ornare nulla bibendum.  Sed et convallis nulla, sed tristique.</a> 
                        </div>
                        


                        
                        <br><br><br><br><br><br>
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
                </div>
            </div>
        </header>
    </div>
</body>

</html>