<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Object</h1>
            <h1 id="object_text" class="foy-text-center fow-w-300 foy-m-0-a"></h1>

            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Event</h1>
            <div class="foy-flex foy-justify-space-beetween fow-w-400 mt-10 foy-m-0-a">
                <button class="foy-m-0-a" onclick="document.getElementById('event').innerHTML = Date()">Date?</button>
                <button class="foy-m-0-a" onclick="this.innerHTML = Date()">Date?</button>

                <button class="foy-m-0-a" onmouseover="this.innerHTML = Date()" onmouseout="this.innerHTML = 'Date?'">Date?</button>
            </div> 
            <p id="event" class="foy-text-center"></p>
        </div>
    </div>
    
    <script src="./assets/js/object.js"></script>

    <script>
        
    </script>
<?php include 'shared/footer.php';?>