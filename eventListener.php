<?php include 'shared/header.php';?>
    <div class="foy-main"  >
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a mb-10">Form Validation</h1>
            <div class="foy-text-center mb-10">
                <p id="myp"><button id="myButton">Click Me</button></p> 
                <p id="demo1"></p>
            </div> 
        </div>
    </div>
   
    <script>
        button = document.getElementById('myButton');
        pButton = document.getElementById('myp');

        pButton.addEventListener('click', function(){
            pClicked("P Clicked")
        }, true);
        function pClicked(p1){
            alert('Clicked '+p1);
        }

        button.addEventListener('click', function(){
            clicked(5)
        } );
        function clicked(p1){
            alert('Clicked'+p1);
        }
        // button.addEventListener('mouseover', another);
        // function another(){
        //     alert('Mouse Over');
        // }
        button.addEventListener('mouseout', another, true);
        function another(){
            alert('Mouse Out');
        }

        window.addEventListener("resize", function(){
            document.getElementById("demo1").innerHTML = Math.random();
        });
    </script> 
<?php include 'shared/footer.php';?>

