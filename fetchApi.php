<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Worker</h1>
             
            <button onclick="startWorker()">Start</button>
            <button onclick="stopWorker()">Stop</button>
            <p id='message'></p>
        </div>
    </div>
    <script src="./assets/js/worker.js"></script>

    <script></script>
        function startWorker(){
            if(typeof Worker !== 'undefined'){
                // worker exists
                if(typeof w == "undefined"){
                    w = new Worker('assets/js/worker.js');
                }
                // listening for worker
                w.onmessage = function(event){
                    console.log(event);
                    document.getElementById('message').innerHTML = event.data;
                };
                
            }else{
                alert("Your browser does not support");
            }
        }
        function stopWorker(){
            if(typeof Worker !== 'undefined'){
                w.terminate();
                w = undefined;
            }else{
                alert("Your browser does not support");
            }
        }
    </script>
<?php include 'shared/footer.php';?>