<div class="navbar">
    <a href="0HOMEPAGE.php">HomePage</a>
    <a href="0_1NOUTATI.php">Informții</a>
    <div class="dropdown">
        <button class="dropbtn" onclick="myFunction()">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
            <a href="1STATUIAZEUS.php">Statuia lui Zeus din Olympia</a>
            <a href="2GRADSUSPENDATE.php">Grădinile suspendate ale Semiramidei</a>
            <a href="3COLOSUL.php">Colosul din Rodos</a>
            <a href="4FARUL.php">Farul din Alexandria</a>
            <a href="5MAREAPIRAMIDA.php">Marea Piramidă din Giza</a>
        </div>
    </div>

    <?php
        session_start();
        if($_SESSION['errors'] == false && $_SESSION['lKey'] == ''){
            echo '<a href="LOGIN.php" class="mright">LogIn</a>';
        }else{
            echo '<a href="PHP/logout.php" class="mright">LogOut</a>';
        }
    ?>
</div>