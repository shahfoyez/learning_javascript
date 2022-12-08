<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h2>JavaScript try catch</h2>

            <p>Please input a number between 5 and 10:</p>

            <input id="demo" type="text">
            <button type="button" onclick="myFunction()">Test Input</button>

            <p id="p01"></p>
        </div>
    </div>
    

    <script>
        var arrys = ['go', 'hf', 'ku'];
        console.log(arrys.search('hf'));

        function myFunction(){
            const message = document.getElementById("p01");
            message.innerHTML = "";
            let x = document.getElementById("demo");
            try{
                if(x == ''){
                    throw "is empty";
                }if(isNaN(x)){
                    throw "is not a number";
                }
                x = Number(x);
                if(x > 10){
                    throw "Too high";
                }if(x<5){
                    throw "Too small";
                }
            }catch(err){
                message.innerHTML = "Input" + err;
            }finally{
                document.getElementById("demo").value = "";
            }
        }
        try{
            alertff("Welcome");
        }catch(err){
            document.getElementById("demo").innerHTML = err;
        }
    </script>
<?php include 'shared/footer.php';?>