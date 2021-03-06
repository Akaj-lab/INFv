<!DOCTYPE html>
<html lang="sl">  
    <head>

        <!-- Ne premikat iz heada! To je google stalk tool! - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173502320-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-173502320-2');
        </script>

        <!-- SEO optimizacija da nas bo folk lahko stalku na googlu -->
        <meta name="description" content="Spletna stran živali, ki se imenujejo R1C.">
        <meta name="keywords" content="R1C, R. 1. C, juje, satan, vegova, elektrotehnika, računalništvo, razred, spletna stran, R.1.C, letnik, 1. letnik, 2005, karin kastelic, programiranje, 206, uroš, breskvar, uros, html, css, python, java skript, vegovacraft, jure, macek, maček, nejc, krasevec, kraševec, hitler, đ, ž, satan, php, github, ekm, moodle2, linki, r1c linki, povezave, ljubljana, center, vegova ulica, šola, srednja šola, dijaki">
        <link rel="alternate" href="https://r1c.juje.si" hreflang="sl-si" />

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title> G1B - Vegova </title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <!-- Naš CSS -->
        <link rel="stylesheet" href="/css/base.css">

    </head>
    <body>
    
        <?php
            require_once 'templates/navbar.html';
        ?>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col"> # </th>
                    <th scope="col"> Predmet </th>
                    <th scope="col"> Podrobnosti ocenjevanja </th>
                    <th scope="col"> Datum </th>
                    <th scope="col"> Ura </th>
                    <th scope="col"> Način ocenjevanja </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "eAsistent.php";

                    $FEArray = $eAC->getFutureEvaluations();

                    $c = 1;
                    foreach($FEArray as $innerAray) {
                        foreach($innerAray as $item) {
                            echo '<tr>';
                            echo '<th scope="row">' . $c . '</th>';
                            echo "<td>" . $item["course"] . "</td>";
                            echo "<td>" . $item["subject"] . "</td>";
                            echo "<td>" . $item["date"] . "</td>";
                            echo "<td>" . $item["period"] . "</td>";
                            echo "<td>" . $item["type_name"] . "</td>";
                            echo '</tr>';
                            $c++;
                        }
                    }
                ?>
            </tbody>
        </table>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    </body>
</html>
