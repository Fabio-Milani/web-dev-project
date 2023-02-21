<?php 
// ricreare esercizio password, piu di 8 caratteri, almeno una maiuscola, un numero e un symbol

$pwd=readline("inserisci la password");

// 8 caratteri estraggo, icapsulo astraggo, regola base
function checkLength($password){
if (strlen($password) >=8) {
        echo "Prima regola rispettata! \n";
        return true;
    }else {
        echo "Prima regola non rispettata! \n";
        return false;
    }
}
    checkLength($pwd); //senza questo non mi stampa nulla sul terminale!

// Lettera maiuscola
function checkUpper($password){
    
    for($i=0; $i < strlen($password); $i++) { 
        //echo $pwd[$i]. "\n"; trattata la stringa come fosse un array
        if(ctype_upper($password[$i]) ==true){   //praticamente se e true, fai il primo echo, se non e true, fai il secondo
           echo "seconda regola rispettata! \n";
           return true;
        }     
    }
    echo "seconda regola non rispettata! \n";
    return false;
}
    ($pwd);

    // Contenere numero

    function checkNumber($password){
        for($i=0; $i < strlen($password); $i++){
            if (is_numeric($password[$i])) {
                echo "terza regola rispettata! \n";
                return true;
            }
            }
            echo "terza regola non rispettata! \n";
            return false;
    }
    
    checkNumber($pwd);

    // Contenere symbol
function checkSpecial($password){
    $special_chars=['!','@','#','$'];
        for ($i=0; $i < strlen($password); $i++) { 
            if(in_array($password[$i], $special_chars)){
                echo "Quarta regola rispettata!\n";
                return true;
            }
        }
        "Quarta regola non rispettata!\n";
                return false;
}
checkSpecial($pwd);

function checkpassword($password){
    $firstRule= checkLength($password);
    $secondRule= checkUpper($password);
    $thirdRule= checkNumber($password);
    $fourthRule= checkSpecial($password);

    if ($firstRule == true && $secondRule==true && $thirdRule==true &&   $fourthRule==true) {
        echo "Password valida!";
    }else {
         echo "Password non valida!";
    }
}
checkpassword($pwd);







// do{
//    $pwd= readline("Inserisci la password") ;
// }while(!passCheck($pwd));