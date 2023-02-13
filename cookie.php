<?php include 'shared/header.php';?>
    <div class="foy-main"  >
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a mb-10">COOKIE</h1>
            <div class="foy-text-center mb-10 foy-parent" id="foy-parent">
                <input 
                    type="button" 
                    value="Set Cookie" 
                    onclick="setCookie('var_1', 'Variable 1', 2)
                ">
                <input 
                    type="button" 
                    value="Get Cookie" 
                    onclick="getCookie('var_1')
                ">
                <p id="cookie_1"></p>
                <p id="cookie_2"></p>

                <?php
                    $_COOKIE['name'] = "FOYEZ";
                ?>
            </div> 
        </div>
    </div>
    <script>
        function setCookie(key, value, expire){
            const d = new Date();
            d.setTime(d.getTime() + expire * 24 * 60 * 60 * 1000);
            let expires = "expires=" + d.toUTCString();
            document.cookie = key + "=" + value + ";" + expires;
            console.log( expires );
        }
        function getCookie(key){
            console.log(document.cookie);
        }


        (function(){
            document.cookie = "username=John Doe; expires=Sunday, 14 Feb 2023 12:00:00 UTC; path=/";
            console.log();
        })();
        
    </script>
<?php include 'shared/footer.php';?>

