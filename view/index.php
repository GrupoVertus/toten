<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>TOTEN</title>
    <link rel="stylesheet" type="text/css" href="_assets/_css/central.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <script src="_assets/js/efeitos-menu.js"></script>
    <style>
        /* Capta a hora e muda de cor dependendo da hora */
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
    <iframe style="width: 100% !important;" width="100%" height="915" src="https://www.youtube.com/embed/GiJQaTZ7W_Y?autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
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
    <div><img class="icons mapa" src="_assets/_img/icones/2.png"></div>
    <div><img class="icons lojas"src="_assets/_img/icones/1.png"></div>
    <div><img class="icons servicos"src="_assets/_img/icones/3.png"></div>
    <div><img class="icons cinema"src="_assets/_img/icones/4.png"></div>
    <div><img class="icons shopping"src="_assets/_img/icones/5.png"></div>
    <!-- Menu Mapa -->
    <div class="menu-mapa">
        <p>
            OPÇÕES DE MENU
        </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58338.52319499488!2d-46.38000858144332!3d-23.95486303971474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce03423c3b1c3b%3A0x584dceedfc63644f!2sSantos%2C+SP!5e0!3m2!1spt-BR!2sbr!4v1451105857645" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Fim Do Menu Mapa -->

    <!-- Menu Lojas -->
    <div class="menu-lojas">
        <iframe scrolling="" src="lojas/alimentacao.html"></iframe>
        <iframe scrolling="" src="lojas/tecnologia.html"></iframe>
        <iframe scrolling="" src="lojas/alimentacao.html"></iframe>
        <iframe scrolling="" src="lojas/tecnologia.html"></iframe>
        <iframe scrolling="" src="lojas/alimentacao.html"></iframe>
        <iframe scrolling="" src="lojas/tecnologia.html"></iframe>
    </div>
    <!-- Fim Do Menu Lojas -->

    <!-- Menu Serviços -->
    <div class="menu-servicos">
        <h2>Tudo que você precisa em um só lugar</h2>
        <center>
        <div>
            <ul>
                <li><img src="servicos/ambulatorio.png"><br><strong>Ambulatório</strong></li>
                <li><img src="servicos/estacionamentoVIP.png"><br><strong>Estacionamento VIP</strong></li>
                <li><img src="servicos/bancos.png"><br><strong>Bancos</strong></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><img src="servicos/fraldario.png"><br><strong>Fraldário</strong></li>
                <li><img src="servicos/wifi.png"><br><strong>Wi-fi na praça de alimentação</strong></li>
                <li><img src="servicos/cadeirante.png"><br><strong>Disponibilidade de cadeira de rodas</strong></li>
            </ul>
        </div>
        <h2>O praiamar conta com várias lojas de serviços para facilitar seu dia-a-dia</h2>
        <div>
            <ul>
                <li><img src="servicos/consertoderoupasecalcados.png"><br><strong>Conserto de roupas e calçados</strong></li>
                <li><img src="servicos/loterica.png"><br><strong>Lotérica</strong></li>
                <li><img src="servicos/podologo.png"><br><strong>Podólogo</strong></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><img src="servicos/manicure.png"><br><strong>Manicure</strong></li>
                <li><img src="servicos/depilacao.png"><br><strong>Depilação</strong></li>
                <li><img src="servicos/farmacia.png"><br><strong>Farmácia</strong></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><img src="servicos/agenciadeviagens.png"><br><strong>Agência de turismo</strong></li>
                <li><img src="servicos/cambio.png"><br><strong>Câmbio</strong></li>
                <li><img src="servicos/hipermercado.png"><br><strong>Hipermercado</strong></li>
            </ul>
        </div>
        </center>
    </div>
    <!-- Fim Do Menu Serviços -->

    <!-- Menu Cinema -->
    <div class="menu-cinema">
        <iframe scrolling="" src="cinema/banner.html"></iframe>
    </div>
    <!-- Fim Do Menu Cinema -->
</div>
<!-- Fim Do Background -->
<!-- Menu Botão -->
<div>

</div>
<!-- Fim Do Menu Botao -->
<img class="logo" src="_assets/_img/praiamar.png">

</body>
</html>