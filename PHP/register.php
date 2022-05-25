<?php 
session_start();

if (count($_POST)){

    $jsonImport = file_get_contents("../DATABASE/datbase.json");
    $importedList = json_decode($jsonImport);

    $uemail = isset($_POST['email']) ? $_POST['email'] : '';
    $upassword = isset($_POST['psw']) ? $_POST['psw'] : '';

    foreach($importedList as $value){
        if($value->Email == $uemail){
            echo true;
            return;
        }
    }

    $importedList[] = ['Email' => $uemail, 'Passwoed' => $upassword];
    $jsonImport = json_encode($importedList);
    file_put_contents('../DATABASE/datbase.json', $jsonImport);
    echo false;
}
?>
