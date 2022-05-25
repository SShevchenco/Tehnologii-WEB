<?php 
session_start();

if (count($_POST)){

    $jsonImport = file_get_contents("../DATABASE/datbase.json");
    $importedList = json_decode($jsonImport);

    $uemail = isset($_POST['eml']) ? $_POST['eml'] : '';
    $upassword = isset($_POST['psw']) ? $_POST['psw'] : '';

    foreach($importedList as $value){

        if($value->Email == $uemail && $value->Passwoed == $upassword){
            $_SESSION['lKey'] = $uemail;
            echo false;
            return;
        }
    }
    echo true;
}
?>