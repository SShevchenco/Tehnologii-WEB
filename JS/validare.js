const regForm = document.getElementById('regFrm');

if(regForm){
    regForm.addEventListener('submit', function(e){
        e.preventDefault();

        if(checkValid()){
            const email = regForm.elements['eml'].value;
            const pas = regForm.elements['psw'].value;
            var errP = document.getElementById('errP');

            $.ajax({
                type: "POST",
                url: "../PHP/register.php",
                data: {
                    "eml": pas,
                    "psw": pas
                },
                dataType: "html",
                success: function(dt){
                    if(dt == true){
                        errP.innerHTML = "Utilizator inexistent!";
                    }else{
                        alert('Ati fost logat cu succes');
                        document.location = '../0HOMEPAGE.php';
                    }
                }
            });
        }

    });
}

function checkValid(){

    const pas1 = regForm.elements['psw'].value;
    const pas2 = regForm.elements['psw-repeat'].value;
    var errP = document.getElementById('errP');

    const passReg = new RegExp("^(?=.*[a-z])^(?=.*[A-Z])^(?=.{5,20})^(?=.*[0-9])");

    if(pas1 != pas2){
        errP.innerHTML = "Parolele nu coincid!";
        return 0;
    }
    if(!passReg.test(pas1)){
        errP.innerHTML = "Parola trebuie sa contina 5+ caractere, cel putin un numar, o litera miniscula si o litera majuscula!";
        return 0;
    }
    return 1;
}
