<?php
function geefTienProcent(){
    $koopPrijs=75;
    $korting = 10;
    $einprijs= ($koopPrijs / 100) * $korting;
    $totaal=$koopPrijs-$einprijs;
    return number_format($totaal ,2);
}
echo geefTienProcent()

?>