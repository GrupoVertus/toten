<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>TOTEN</title>
    <link rel="stylesheet" type="text/css" href="_assets/_css/central.css">
    <script>
        $(document).ready(function() {
            $('#texto').bind('cut copy paste', function(event) {
                event.preventDefault();
            });
        });</script>

    <style>

        <?php
        date_default_timezone_set("America/Sao_Paulo");
        $hora = date("G");
        if ($hora >= 6 && $hora < 12) echo ".corpo{background-color:#FFB097;}";
        elseif ($hora >= 12 && $hora < 18) echo ".corpo{background-color:#FFB02A;}";
        else echo ".corpo{background-color:#8ACBD2;}";
        ?>
    </style>
    <style>
        <?php
        date_default_timezone_set("America/Sao_Paulo");
        $hora = date("G");
        if ($hora >= 6 && $hora < 12) echo "li a {background-color:#FFB097;};li span{background-color:#FFB097;} ";
        elseif ($hora >= 12 && $hora < 18) echo "li a {background-color:#FFB02A;}li span{background-color:#FFB02A;;} ";
        else echo "li a {background-color:#8ACBD2};li span {background-color:#8ACBD2;}";
        ?>
    </style>
    <script type="text/javascript">

        var digital = new Date(); // crio um objeto date do javascript
        digital.setHours(15,59,56)
        digital.setHours(<?php echo date("H,i"); ?>); // seto a hora usando a hora do servidor
        function clock() {
            var hours = digital.getHours();
            var minutes = digital.getMinutes();
            var seconds = digital.getSeconds();
            digital.setSeconds( seconds+1 ); // aquin que faz a mágica
// acrescento zero
            if (minutes <= 9) minutes = "0" + minutes;

            dispTime = hours + ":" + minutes;
            document.getElementById("clock").innerHTML = dispTime; // coloquei este div apenas para exemplo
            setTimeout("clock()", 1000); // chamo a função a cada 1 segundo

        }

        window.onload = clock;


    </script>

</head>
<body>
<!-- Player De Video -->
<div>
    <iframe width="100%" height="915" src="https://www.youtube.com/embed/GiJQaTZ7W_Y?autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
</div>
<!-- Fim Do Player -->

<!-- Relogio -->
<div class="relogio">
<div id="clock">

</div>
</div>
<!-- Fim Do Relogio -->
<!-- Background do menu -->
<div class="menu">

    <div><img class="icons"src="_assets/_img/icones/1.png"></div>
    <div><img class="icons"src="_assets/_img/icones/2.png"></div>
    <div><img class="icons"src="_assets/_img/icones/3.png"></div>
    <div><img class="icons"src="_assets/_img/icones/4.png"></div>
    <div class="icons"></div>
    <div class="icons"></div>
    <div class="icons"></div>
    <div class="icons"></div>
    <div class="icons"></div>
    <div class="icons"></div>
    <div class="icons"></div>
    <div class="icons"></div>



    <!-- Menu De Icones -->
    <div>

    </div>
    <!-- Fim Do Menu De Icones -->
</div>
<!-- Fim Do Background -->
<!-- Menu Botão -->
<div>

</div>
<!-- Fim Do Menu Botao -->
<img class="logo" src="_assets/_img/praiamar.png">

</body>
</html>