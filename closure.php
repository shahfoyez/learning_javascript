<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Arrow Function</h1>
            <p class="foy-text-center foy-bold mt-10">String Length</p>
            <p id="demo" class="foy-text-center m-0"></p>
            <!-- <button id="btn">Click</button> -->
            <div id="list" class="foy-text-center">
                
            </div>
        </div>
    </div>
    
    <script src="./assets/js/car.js"></script>
    <script>
        // var num1 = 1;
        // var num2 = 2;
        // var sum = function(){
        //     return function(){
        //         return num1 + num2;
        //     };
        // }
        // var myFunc = sum();
        function bankAccount(initialBalance){
            var balance = initialBalance;
            return function(){
                return balance;
            };
        }

        var account = bankAccount(2300); 
        console.dir(account);

        // console.log(account());

       
    </script> 
<?php include 'shared/footer.php';?>

