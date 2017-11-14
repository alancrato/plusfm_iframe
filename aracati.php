<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Plus Fm - Aqui é legal demais!</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="img/favicon.png"/>

</head>

<body>

<section>

    <!--Oculto apenas para mobile-->
    <div id="player_original">
        <audio id="music" src="http://198.24.156.115:9304/;" preload="true" autoplay controls></audio>
    </div>

    <div id="audioplayer">

        <div class="container">
            <div class="row">

                <div class="col-md-2 hidden-sm hidden-xs">
                    <div id="buuton">
                        <button id="pButton" class="pause"></button>
                    </div>
                </div>

                <div class="col-sm-2 col-xs-2 visible-sm visible-xs">
                    <div id="buuton2">
                        <button id="pButton2" class="play"></button>
                    </div>
                </div>


                <div class="col-md-10 col-sm-10 col-xs-10">
                    <div class="squares">
                        <ul>
                            <li><a href="index.php">Rede</a></li>
                            <li><a href="aracati.php" style="color: #d25246">Aracati</a></li>
                            <li><a href="crateus.php">Crateús</a></li>
                            <li><a href="index.php">Iguatu/Cariús</a></li>
                            <li class="hidden-xs"><a href="paraipaba.php">Paraipaba</a></li>
                            <li class="hidden-xs hidden-sm"><a href="redencao.php">Redenção</a></li>
                            <li class="hidden-xs hidden-sm"><a href="santa-quiteria.php">St° Quitéria</a></li>
                            <li class="hidden-xs hidden-sm"><a href="sobral.php">Sobral</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(null)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="visible-xs"><a href="paraipaba.php">Paraipaba</a></li>
                                    <li class="visible-xs visible-sm"><a href="redencao.php">Redenção</a></li>
                                    <li class="visible-xs visible-sm"><a href="santa-quiteria.php">St° Quitéria</a></li>
                                    <li class="visible-xs visible-sm"><a href="sobral.php">Sobral</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="timeline">
        <div id="playhead">
        </div>
    </div>

</section>

<iframe frameborder="0" width="100%" height="100%" src="http://localhost/draco/plusfm/novo/">
    <p>Seu navegador não suporta iframes.</p>
</iframe>

<!-- Js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/audioplayer.js"></script>
<script src="js/siriwave.js"></script>
<script>
    var SW = new SiriWave({
        height: 100,
        speed: 0.1,
        amplitude: 1,
        container: document.getElementById('siric'),
        autostart: true,
    });
</script>

</body>
</html>