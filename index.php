<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://localhost/Javascript/assets/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    </head>
    <body></body>
        <h1 id="demo">Hello there</h1>
        <div>
            <button onclick="document.getElementById('image').src='http://localhost/Javascript/assets/images/pic_bulboff.gif'">Turn off</button>
            <img id="image" src="http://localhost/Javascript/assets/images/pic_bulboff.gif">
            <button onclick="document.getElementById('image').src='http://localhost/Javascript/assets/images/pic_bulbon.gif'">Turn on</button>
        </div>
        <div class="show-hide">
        <button id="text-hide" onclick="document.getElementById('image').style.display='none'">Click to Hide</button>
        <button id="text-hide" onclick="document.getElementById('image').style.display='initial'">Click to Show</button>
        </div>
        <script src="http://localhost/Javascript/assets/js/script.js" async defer></script>
        
    </body>
</html>