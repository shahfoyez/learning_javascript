<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Object</h1>
            <h1 id="object_text" class="foy-text-center fow-w-300 foy-m-0-a"></h1>

            <h1 id="demo1" class="foy-text-center fow-w-500 foy-m-0-a  mt-50">Event</h1>
            <div class="foy-flex foy-justify-space-beetween fow-w-400 mt-10 foy-m-0-a">
                <button class="foy-m-0-a" onclick="document.getElementById('event').innerHTML = Date()">Date?</button>
                <!-- <button class="foy-m-0-a" onclick="this.innerHTML = Date()">Date?</button> -->

                <button class="foy-m-0-a" onmouseover="this.innerHTML = Date()" onmouseout="this.innerHTML = 'Date?'">Date?</button>
            </div> 
            <p id="event" class="foy-text-center"></p>

            <h1 id="demo2" class="foy-text-center fow-w-300 foy-m-0-a mt-50">String Method</h1>
            
            <p class="foy-text-center foy-bold m-0">String Length</p>
            <p id="str_length" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">String Slice</p>
            <p id="str_slice" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">String Slice</p>
            <p id="str_sub" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">String Slice</p>
            <p id="str_replace" class="foy-text-center m-0"></p>

            <h1 id="demo3" class="foy-text-center fow-w-300 foy-m-0-a mt-50">String Search</h1>
            <p class="foy-text-center foy-bold m-0">indexOf</p>
            <p id="indexOf" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">lastIndexOf</p>
            <p id="lastIndexOf" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">search</p>
            <p id="search" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">match</p>
            <p id="match" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0"> matchAll</p>
            <p id="matchAll" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">includes</p>
            <p id="includes" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">startsWith</p>
            <p id="startsWith" class="foy-text-center m-0"></p>

            <p class="foy-text-center foy-bold m-0">endsWith</p>
            <p id="endsWith" class="foy-text-center m-0"></p>

            <h1 id="demo4" class="foy-text-center fow-w-300 foy-m-0-a mt-50">String Literals</h1>
            <p class="foy-text-center foy-bold m-0">Literals</p>
            <p id="stringLiterals" class="foy-text-center m-0"></p>

            <h1 id="demo4" class="foy-text-center fow-w-300 foy-m-0-a mt-50">Number</h1>
            <p class="foy-text-center foy-bold m-0">Number Methods</p>
            <p id="numberMethod" class="foy-text-center m-0"></p>

        </div>
    </div>
    
    <script src="./assets/js/object.js"></script>

    <script>
        
    </script>
<?php include 'shared/footer.php';?>