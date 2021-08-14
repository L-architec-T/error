<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style>@import url(https://fonts.googleapis.com/css?family=Inconsolata);html{min-height:100%}body{box-sizing:border-box;height:100%;background-color:#000;background-image:radial-gradient(#11581e,#041607),url(https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif);background-repeat:no-repeat;background-size:cover;font-family:Inconsolata,Helvetica,sans-serif;font-size:1.5rem;color:rgba(128,255,128,.8);text-shadow:0 0 1ex #3f3,0 0 2px rgba(255,255,255,.8)}.noise{pointer-events:none;position:absolute;width:100%;height:100%;background-image:url(https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif);background-repeat:no-repeat;background-size:cover;z-index:-1;opacity:.02}.overlay{pointer-events:none;position:absolute;width:100%;height:100%;background:repeating-linear-gradient(180deg,rgba(0,0,0,0) 0,rgba(0,0,0,.3) 50%,rgba(0,0,0,0) 100%);background-size:auto 4px;z-index:1}.overlay::before{content:"";pointer-events:none;position:absolute;display:block;top:0;left:0;right:0;bottom:0;width:100%;height:100%;background-image:linear-gradient(0deg,transparent 0,rgba(32,128,32,.2) 2%,rgba(32,128,32,.8) 3%,rgba(32,128,32,.2) 3%,transparent 100%);background-repeat:no-repeat;-webkit-animation:scan 7.5s linear 0s infinite;animation:scan 7.5s linear 0s infinite}@-webkit-keyframes scan{0%{background-position:0 -100vh}100%,35%{background-position:0 100vh}}@keyframes scan{0%{background-position:0 -100vh}100%,35%{background-position:0 100vh}}.terminal{box-sizing:inherit;position:absolute;height:100%;width:100%;max-width:100%;padding:4rem;text-transform:uppercase}.output{color:rgba(128,255,128,.8);text-shadow:0 0 1px rgba(51,255,51,.4),0 0 2px rgba(255,255,255,.8)}.output::before{content:"> "}a{color:#fff;text-decoration:none}.errorcode{color:#fff}.footer{position:absolute;bottom:2px;right: 10px;font-size: 15px;}</style>
</head>

<body>
<div class="noise"></div>
<div class="overlay"></div>
<div class="terminal">
    <h1>erreur <span class="errorcode">interactive</span></h1>
    <h3></h3>
    <br><br>Cliquez sur la <strong>page d'erreur</strong> que vous souhaitez visualiser.<br><br><br>
    <p class="output">
        <a href="./error.php?error=400">400</a>
        <a href="./error.php?error=401">401</a>
        <a href="./error.php?error=402">402</a>
        <a href="./error.php?error=403">403</a>
        <a href="./error.php?error=404">404</a>
        <a href="./error.php?error=405">405</a>
        <a href="./error.php?error=500">500</a>
        <a href="./error.php?error=501">501</a>
        <a href="./error.php?error=502">502</a>
        <a href="./error.php?error=503">503</a>
        <a href="./error.php?error=504">504</a>
        <a href="./error.php?error=505">505</a>
    <p>
</div>
<span class="footer">By LarchitecT</span>
</body>
</html>