<!DOCTYPE html>
<html lang="fr" >
    <head>
        <meta charset="UTF-8">
        <title>Error <?php echo $_GET['error'] ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <style>@import url(https://fonts.googleapis.com/css?family=Inconsolata);html{min-height:100%}body{box-sizing:border-box;height:100%;background-color:#000;background-image:radial-gradient(#11581e,#041607),url(https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif);background-repeat:no-repeat;background-size:cover;font-family:Inconsolata,Helvetica,sans-serif;font-size:1.5rem;color:rgba(128,255,128,.8);text-shadow:0 0 1ex #3f3,0 0 2px rgba(255,255,255,.8)}.noise{pointer-events:none;position:absolute;width:100%;height:100%;background-image:url(https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif);background-repeat:no-repeat;background-size:cover;z-index:-1;opacity:.02}.overlay{pointer-events:none;position:absolute;width:100%;height:100%;background:repeating-linear-gradient(180deg,rgba(0,0,0,0) 0,rgba(0,0,0,.3) 50%,rgba(0,0,0,0) 100%);background-size:auto 4px;z-index:1}.overlay::before{content:"";pointer-events:none;position:absolute;display:block;top:0;left:0;right:0;bottom:0;width:100%;height:100%;background-image:linear-gradient(0deg,transparent 0,rgba(32,128,32,.2) 2%,rgba(32,128,32,.8) 3%,rgba(32,128,32,.2) 3%,transparent 100%);background-repeat:no-repeat;-webkit-animation:scan 7.5s linear 0s infinite;animation:scan 7.5s linear 0s infinite}@-webkit-keyframes scan{0%{background-position:0 -100vh}100%,35%{background-position:0 100vh}}@keyframes scan{0%{background-position:0 -100vh}100%,35%{background-position:0 100vh}}.terminal{box-sizing:inherit;position:absolute;height:100%;width:100%;max-width:100%;padding:4rem;text-transform:uppercase}.output{color:rgba(128,255,128,.8);text-shadow:0 0 1px rgba(51,255,51,.4),0 0 2px rgba(255,255,255,.8)}.output::before{content:"> "}a{color:#fff;text-decoration:none}.errorcode{color:#fff}.footer{position:absolute;bottom:2px;right: 10px;font-size: 15px;}</style>
    </head>

    <body>
        <div class="noise"></div>
        <div class="overlay"></div>
        <div class="terminal">
            <h1>Erreur <span class="errorcode"><?php echo $_GET['error'] ?></span></h1>
            <h3><?php
                switch($_GET['error'])
                {
                    case '400':
                        echo 'Échec de l\'analyse HTTP';
                        break;
                    case '401':
                        echo 'Le pseudo ou le mot de passe n\'est pas correct';
                        break;
                    case '402':
                        echo 'Le client doit reformuler la demande avec les bonnes données de paiement';
                        break;
                    case '403':
                        echo 'Requête interdite';
                        break;
                    case '404':
                        echo 'La page n\'existe pas';
                        break;
                    case '405':
                        echo 'Méthode non autorisée';
                        break;
                    case '500':
                        echo 'Erreur interne ou serveur saturé';
                        break;
                    case '501':
                        echo 'Le serveur ne supporte pas le service demandé';
                        break;
                    case '502':
                        echo 'Mauvaise passerelle';
                        break;
                    case '503':
                        echo 'Service indisponible';
                        break;
                    case '504':
                        echo 'Temps de réponse trop élevé';
                        break;
                    case '505':
                        echo 'Version HTTP non supportée';
                        break;
                    default:
                        echo 'Erreur inconnu';
                }
                ?></h3>
            <br><br>
            Vous pouvez <strong>report</strong> le problème sur notre support discord en cliquant ci-dessous.
            <br><br><br>
            <p class="output"><a href="https://discord.gg/PmVeTa6">Support Discord</a><p>
            <p class="output"><a href="../<?php echo basename(__DIR__); ?>/">Retour</a><p>
        </div>
        <span class="footer">By LarchitecT</span>
    </body>
</html>
