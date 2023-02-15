<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Dom</h1>
            <input id="id_1" type="number" min="100" max="300" required>
            <button onclick="myFunction()">OK</button>

            <p id='message'></p>
        </div>
    </div>

    <script>
        function myFunction(){
            // window.history.forward();
            // window.history.go(-2);
            localStorage.setItem('name_value', 'Hello');
            sessionStorage.setItem('name_value_1', 'Hello_1');
            // sessionStorage.clear();

            console.log(localStorage.getItem('name_value') );
            console.log(sessionStorage.getItem('name_value_1') );

            const inputObj = document.getElementById('id_1');
            
            if(inputObj.validity.rangeOverflow){
                inputObj.setCustomValidity("You have made a range overflow error!");
            }if(inputObj.validity.rangeUnderflow){
                inputObj.setCustomValidity("You have made a range underflow error!");
            }if(inputObj.validity.valueMissing){
                inputObj.setCustomValidity("You must enter some value!");
            }
            if(!inputObj.checkValidity()){
                document.getElementById('message').innerHTML = inputObj.validationMessage;
            }
        }
    </script>
<?php include 'shared/footer.php';?>