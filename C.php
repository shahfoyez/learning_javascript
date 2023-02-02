<?php include 'shared/header.php';?>
    <div class="foy-main"  >
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a mb-10">Event Listener</h1>
        
            <div class="foy-text-center mb-10">
                <button id="myClick">
                    Click Me
                </button>
            </div> 
           

            
        </div>
    </div>
   
    <script>
        button = document.getElementById('myClick');
        button.addEventListener('click', function(){
            alert("Click me!");
        });
    </script> 
<?php include 'shared/footer.php';?>

