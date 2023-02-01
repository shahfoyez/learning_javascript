<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a mb-10">Form Validation</h1>
            <form class="foy-text-center" name="myForm" action="" onsubmit="return validateForm()" method="post">
                Name: <input type="text" name="fname">
                <input type="submit" value="Submit">
            </form>
            <p id="name_error"></p>

        </div>
    </div>
   
    <script src="./assets/js/validate.js"></script>

    <script>
         
    </script> 
<?php include 'shared/footer.php';?>

