<!DOCTYPE html>
<html>
    <head>
        <!-- Google špijoniranje, ne premiki iz heada! - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173502320-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-173502320-2');
        </script>



        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title> G1B website </title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <!-- Naš CSS -->
        <link rel="stylesheet" href="/css/base.css">

    </head>
    <body>

        <?php
            require 'templates/navbar.html';
        ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="wDiv">
            <p align="center">
                <h1 class="text-center border-bottom pb-3"> To je koledar!</h1>
                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FBelgrade&amp;src=ZHJtazhlOTRkdjBkYThjaDczaGZncDZkZ2tAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=Y2xhc3Nyb29tMTAyNTUwOTM5MTY3NjcxMDA5NzIxQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%239E69AF&amp;color=%230047a8" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </p>
        </div>
    
    </body>
</html>
