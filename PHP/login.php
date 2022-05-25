<?php 
session_start();
$_SESSION['errors'] = true;

if (count($_POST)){

    $jsonImport = file_get_contents("../DATABASE/datbase.json");
    $importedList = json_decode($jsonImport);

    $uemail = isset($_POST['eml']) ? $_POST['eml'] : '';
    $upassword = isset($_POST['psw']) ? $_POST['psw'] : '';

    foreach($importedList as $value){

        if($value->Email == $uemail && $value->Passwoed == $upassword){
            $_SESSION['errors'] = false;
            $_SESSION['lKey'] = $uemail;
            $_SESSION['errorMessage'] = "";
            echo "<script>alert('Ati fost logat cu succes'); document.location = '../0HOMEPAGE.php';</script>";
            break;
        }
    }
    if($_SESSION['errors'] == true){
        $_SESSION['errorMessage'] = "Utilizator inexistent!";
        echo "<script>document.location = '../LOGIN.php';</script>";
    }
}
?>