<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Javascript Class</h1>
            <p id="demo" class="foy-text-center m-0"></p>
            <div id="list" class="foy-text-center">
                
            </div>
        </div>
    </div>
    <script>
        const paymentSuccess = true;
        const marks = 70;

        function enroll(callback){
            console.log('Course enrollment in progress');
            setTimeout(function(){
                if(paymentSuccess){
                    callback();
                }else{
                    console.log("Payment Failed!");
                }
            }, 2000);
        }

        function progress(callback){
            console.log('Course on progress...');
            setTimeout(function(){
                if(marks >= 70){
                    callback();
                }else{
                    console.log("Sorry you are failed!");
                }
            }, 3000);
        }

        function getCertificate(callback){
            console.log("Preparing your certificate...");
            setTimeout(function(){
                console.log('congrats you got your certificate');
            }, 1000);
        }
    
        enroll(function(){
            progress(function(){
                getCertificate();
            });
        });
    </script> 
<?php include 'shared/footer.php';?>

