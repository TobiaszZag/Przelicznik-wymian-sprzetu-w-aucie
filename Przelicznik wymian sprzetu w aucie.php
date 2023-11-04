<!DOCTYPE html>
<center>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przelicznik wymian sprzetu w aucie</title>
</head>
<body>
    
    <form action="" method="Post">
    <label for="km">Podaj ile przejechałeś kilometrów: </label>
    <br></br>
    <input type="number" name="liczba_km" id="km">
    <br></br>
    <input type="submit" value="Wyślij">
    <br></br>
    </form>

    <?php
class auto {
    public $paliwo = 100;
    public $kola = 4;
    public $plyn_do_spryskiwaczy = 5;
    public $plyn_chlodzacy = 5;

    public function wyswietl() {
        echo "Paliwo: " . $this->paliwo . " litrów<br>";
        echo "Koła: " . $this->kola . "<br>";
        echo "Płyn_do_spryskiwaczy: " . $this->plyn_do_spryskiwaczy . " litrów<br>";
        echo "Płyn_chłodzący: " . $this->plyn_chlodzacy . " litrów<br>";
    }

    public function sprawdzKilometry($km) {
        switch (true) {
            case ($km < 10):
                return "Wszystko jest w porządku możesz jechać dalej". "<br>";
            case ($km < 100):
                $this->paliwo -= 50;
                return "Przejechałeś $km km: Musisz dolać paliwa." . "<br>";
            case ($km >= 100 && $km < 1000):
                $this->kola -= 2;
                $this->paliwo -= 50;
                return "Przejechałeś $km km: 2 Koła straciły powietrze, musisz je napompować i przy okazji musisz dolać paliwo." . "<br>";
            case ($km >= 1000 && $km < 1500):
                $this->kola -= 3;
                $this->paliwo -= 70;
                $this->plyn_do_spryskiwaczy -= 5;
                return "Przejechałeś $km km: 3 Koła straciły powietrze, musisz je napompować, przy okazji musisz dolać paliwo, i skończył ci się płyn do spryskiwaczy, również musisz go dolać." . "<br>";
            case ($km >= 1500):
                $this->kola -= 4;
                $this->paliwo -= 100;
                $this->plyn_do_spryskiwaczy -= 5;
                $this->plyn_chlodzacy -= 5;
                return "Przejechałeś $km km: 4 Koła straciły powietrze, musisz je napompować i dolać każdy z płynów.". "<br>";
            default:
                return "Podana liczba kilometrów jest nieprawidłowa." ;
        }
    }
    
    public function wyswietl2() {
        echo "Paliwo: " . $this->paliwo . " litrów<br>";
        echo "Koła: " . $this->kola . "<br>";
        echo "Płyn_do_spryskiwaczy: " . $this->plyn_do_spryskiwaczy . " litrów<br>";
        echo "Płyn_chłodzący: " . $this->plyn_chlodzacy . " litrów<br>";
    }
}


$obiekt = new auto();
echo "Przed przejazdem" . "<br>";
$obiekt->wyswietl();



    $km = $_POST['liczba_km'];

    $wynik = $obiekt->sprawdzKilometry($km);
    
    echo "<br>". $wynik . "<br>";

    echo "Po przejaździe";
?>
<br>

<?php
    $obiekt->wyswietl2();
?>



</body>
</html>