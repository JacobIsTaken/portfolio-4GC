<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Opinie klientów</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
        <header>
            <h1>Hurtownia spożywcza</h1>
        </header>
        <article>
            <h2>Opinie naszych klientów</h2>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'hurtownia');
            //Skrypt 1
            $zapytanie="SELECT kl.zdjecie, kl.imie, op.opinia FROM klienci kl, opinie op WHERE kl.id = op.Klienci_id  AND kl.Typy_id IN (2,3)";
            
            $wynik=mysqli_query($con,$zapytanie);

            //Zapytanie 3
            while (($r=mysqli_fetch_array($wynik))!= NULL){
                echo "<div class='opinia'><img src='".$r['zdjecie']."' alt='klient'><q>".$r['opinia']."</q><h4>".$r['imie']."</h4></div>";
            };
            
            ?>
        </article>
        <footer class="futer">
            <h3>Współpracują z nami</h3>
            <a href="http://sklep.pl/">Sklep 1</a>
        </footer>
        <footer2 class="futer">
            <h3>Nasi top klienc</h3>
            <ol>
                <?php
                //Skrypt 2
                $zapytanie2="SELECT kl.imie, kl.nazwisko, kl.punkty FROM klienci kl ORDER BY kl.punkty DESC LIMIT 3";
            
                $wynik2=mysqli_query($con,$zapytanie2);

                while (($w=mysqli_fetch_array($wynik2))!= NULL){
                    echo "<li>".$w['imie']." ".$w['nazwisko'].", ".$w['punkty']." pkt.</li>";
                };

                ?>
            </ol>
        </footer2>
        <footer3 class="futer">
            <h3>Skontaktuj się</h3>
            <p>telefon: 111222333</p>
        </footer3>
        <footer4 class="futer">
            <h3>Autor: 03272308919</h3>
        </footer4>
        <?php
        //Zamykanie poloczenia z baza danych
        mysqli_close($con);
        ?>
    </body>
</html>