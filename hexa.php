<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Grape+Nuts&family=Kanit&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9310e1148a.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>HEXA</title>
</head>
<body>
    <div class="navsearch">
         <h2><a href="hexa.html">Projektna <span>nedelja</span></a></h2>
        <input type="text" placeholder="Pretrazite" id="search-input" >
        <button id="aa" aria-pressed="false"><i class="fa-solid fa-magnifying-glass"></i></button>
        <div class="divimg">
            <!--<a href="./user.html"><img src="img/profile2.jpg" width="100%" class="navimg" alt="" srcset=""></a>-->
            <img src="img/profile2.jpg" width="100%" class="navimg" alt="" srcset="">
        </div>
    </div>
    <h3 id="userneki"></h3>

    <div class="loadScreen">
        <img src="img/load.svg" alt=“blankimage”>
    </div>
    
    <div class="container">
        <div class="row">
             <div class="col-md-3">
                <div class="inner-container left-side">
                    <a href="./user.html"><img src="img/profile2.jpg" alt="" class="profile"></a>
                    
                    <p><b id="username"></b></p>
                    <p id="email"></p>

                    <button id="editAccount">Izmeni nalog</button>
                    <button id="logout">Logout</button>   
               </div>
            </div>
            <div class="col-md-9">
                <div class="inner-container right-side">
                    <form id="postForm">
                        <textarea name="" id="postContent" cols="" rows="" placeholder="Napisi nesto i objavi.."></textarea>
                        <button>Objavi</button>
                    </form>
                    <div id="allPostsWrapper"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-modal">
        <button id="closeModal">X</button>
        <form id="editForm">
            <h2>Izmenite korisnika</h2>
                <div>
                    <label for="korisnicko_ime">Korisnicko ime: *</label>
                    <input type="text" id="korisnicko_ime" name="korisnicko_ime" placeholder="example123">
                </div>

                <div>
                    <label for="edit_email">Email adresa: *</label>
                    <input type="text" id="edit_email" name="register_email" placeholder="example@email.com">
                </div>

                <div>
                    <button>Izmeni</button>
                </div>
        </form>

        <hr>

        <button id="deleteProfile">Obrisi profil</button>
    </div>

    

    <script src="js/Session.js"></script>    
</body>
</html>