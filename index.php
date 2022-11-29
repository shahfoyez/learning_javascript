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
    <h1 id="demo" class="foy-text-center fow-w-300">Hello there</h1>
    <div>
        <button
            onclick="document.getElementById('image').src='http://localhost/Javascript/assets/images/pic_bulboff.gif'">Turn
            off</button>
        <img id="image" src="http://localhost/Javascript/assets/images/pic_bulboff.gif">
        <button
            onclick="document.getElementById('image').src='http://localhost/Javascript/assets/images/pic_bulbon.gif'">Turn
            on</button>
    </div>

    <div class="foy-flex foy-justify-space-beetween fow-w-300 mt-10">
        <button id="text-hide-1" onclick="document.getElementById('image').style.display='none'">Click to Hide</button>
        <button id="text-hide-2" onclick="document.getElementById('image').style.display='initial'">Click to
            Show</button>
    </div>

    <div class="foy-flex foy-justify-space-beetween fow-w-300 mt-10">
        <button id="button-1" onclick="document.getElementById('foy-demo').innerHTML ='Hi!'">Click Here</button>
        <p id="foy-demo"></p>
        <button id="button-2" onclick="document.getElementById('foy-demo').innerHTML ='Hello!'">Click Here</button>
        <button id="button-3" onclick="alert('Are you Sure')">Click</button>
    </div>  
    <div class="foy-flex foy-justify-space-beetween fow-w-300 mt-10">
        <button onclick="window.print()">Print this page</button>
    </div> 
    <div class="foy-flex fow-w-300 mt-10">
        <button id="button-2" onclick="myFunction1()">Variable</button>
        <p id="foy-demo1"></p>
    </div>  

    <script src="http://localhost/Javascript/assets/js/script.js" async defer></script>
    <script src="./assets/js/scope.js"></script>
    <script src="./assets/js/functions.js"></script>

    <script>
        function myFunction1(){
            let var1 = "Variable 01", var2 = "Variable 02";
            document.getElementById('foy-demo1').innerHTML = var2;

            const array = ['foyez', 'arif', 'shoive'];
            const object = {name:"foyez", age: "24"}
            array[0] = "habib";
            array.push("ibrahim");
            console.log(typeof object);
        }
        console.log(var1);
    </script>
</body>

</html>