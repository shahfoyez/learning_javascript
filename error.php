<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h2>JavaScript try catch</h2>

            <p>Please input a number between 5 and 10:</p>

            <input id="demo" type="text">
            <button type="button" onclick="myFunction()">Test Input</button>
            <p id="p01"></p>

            <input id="demo1" type="text">
            <!-- onClick="submitAction()" -->
            <button type="button" class="foy_btn" onClick="submitAction()" id="foy_btn">Send</button>
            <p id="p02"></p>
        </div>
    </div>
    <script>
        function myFunction(){
            const message = document.getElementById("p01");
            message.innerHTML = "";
            let x = document.getElementById("demo").value;
            // console.log(x);
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

        function submitAction() {     
            // onClick="this.disabled=true; this.innerText='Sending…'; "
            let  button = document.getElementById('foy_btn');
            button.disabled = true;
            button.innerText = 'Sending...';
            const array1 = {
                name: "foyez",
                username: 'ali'
            };
            const array2 = {
                fullname: function(){
                    return this.name + " " + this.username;
                }
            }
            document.getElementById("p02").innerHTML = "I can display " + array2.fullname.call(array1);
        };

        myFunction1();
        document.getElementById("p02").innerHTML = "I can display " + carName;
        
        function myFunction1() {
            var carName = "Volvo";
        }
    </script>
<?php include 'shared/footer.php';?>