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
            const inputObj = document.getElementById('id_1');
            if(!inputObj.checkValidity()){
                document.getElementById('message').innerHTML = inputObj.validationMessage;
            }
        }
    </script>
<?php include 'shared/footer.php';?>