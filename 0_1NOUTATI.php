<!DOCTYPE html>
<html>

<head>
    <title>LAB</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/00HOMEPAGE.css">
    <link rel="stylesheet" href="CSS/MENIU.css">
    <link rel="stylesheet" href="CSS/up_top.css">
    <link rel="stylesheet" href="CSS/slideshow.css">
    <link rel="stylesheet" href="CSS/66LOGINPAGE.css">
    <script src="JS/LogIn.js"></script>
    <script src="JS/meniu.js"></script>
    <script src="JS/slideshow.js"></script>
    <script src="JS/readmore.js"></script>
</head>

<body>
    <?php
    require('navbar.php')
    ?>


    <br><br>
    <div id="outer">
        <div id="hdr">
            <h1>Informații</h1>
        </div>
        <div id="cont">
            <h2>Informatii</h2>
            <p>Reprezentari explicite ale grandorii, puterii si influentei de care s-au bucurat conducatorii politici, militari si religiosi, cele 7 mari minuni ale lumii fascineaza la randu-le prin grandoare. Ele s-au inaltat din<span id="dots">...</span>
                <span id="more">setea de eternitate a unor muritori, care au indraznit sa puna pariu cu Timpul si sa sfideze obstacolele naturii. Asemenea oameni, putini la numar, s-au nascut in mai toate secolele, asa incat cele 7 minuni antice au fost concurate in Evul Mediu, iar apoi in epoca moderna, de alte si alte constructii fara egal.Fie ca sunt castigate prin forta, fie prin consens, si puterea laica, si cea religioasa au avut si au nevoie permanenta de legitimitate. Iar cel mai eficient mijloc de a pastra legitimitatea este, conform sociologilor, impunerea la nivel macrosocial a unor simboluri care sa aminteasca in mod constant supusilor de maretia si puterea zeilor si a regilor. Forta acestor simboluri tine atat de prosperitatea societatii in cauza, cat si de maretia conducatorilor respectivi.
                </span>
            </p>
            <button onclick="myFunction1()" id="myBtn">Read more</button>
            <div class="dws ">
                <a href="#" class="buton"><a>
            </div>
            <br>

            <body>

                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="FOTO/foto1 2022-04-21 111632.png" style="width:100%">
                        <div class="text">Minunele lumii</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="FOTO/foto 2 2022-04-21 111719.png" style="width:100%">
                        <div class="text">Grădinile suspendate ale Semiramidei</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="FOTO/Аннотация 2022-04-21 111821.png" style="width:100%">
                        <div class="text">Marea Piramidă din Giza</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                <br>


                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                <h2>Ce sunt minunele ale lumii?</h2>
                <p>
                    Timpul si sa sfideze obstacolele naturii. Asemenea oameni, putini la numar, s-au nascut in mai toate secolele, asa incat cele 7 minuni antice au fost concurate in Evul Mediu, iar apoi in epoca moderna, de alte si alte constructii fara egal.Fie ca sunt castigate prin forta, fie prin consens, si puterea laica, si cea religioasa au avut si au nevoie permanenta de legitimitate. Iar cel mai eficient mijloc de a pastra legitimitatea este, conform sociologilor, impunerea la nivel macrosocial a unor simboluri care sa aminteasca in mod constant supusilor de maretia si puterea zeilor si a regilor. Forta acestor simboluri tine atat de prosperitatea societatii in cauza, cat si de maretia conducatorilor respectivi.
                </p>
                <div class="dws ">
                    <a href="#" class="buton"><a>
                </div>
        </div>
        <div id="ftr">
            Articole
        </div>
    </div>
    <a href="#" class="up_top">
        <img src="FOTO/arrow-up-icon-png-17.jpg" class="img">
    </a>
</body>

</html>