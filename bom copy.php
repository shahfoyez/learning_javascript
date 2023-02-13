<?php include 'shared/header.php';?>
    <div class="foy-main"  >
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a mb-10">BOM</h1>
            <div class="foy-text-center mb-10 foy-parent" id="foy-parent">
                <input type="button" value="Open Window" onclick="openWindow()">
                <input type="button" value="Close Window" onclick="closeWindow()">
                <div id="width"></div>
                <div id="height"></div>
                <button onclick="foyTimeout()">Timeout</button>
                <button onclick="foyInterval()">Interval</button>
                <p id="foyDate"></p>
                <p id="foyDate_1"></p>
            </div> 
        </div>
    </div>
    <script>
        // let myWindow;
        // const width = document.getElementById("width");
        // const height = document.getElementById("height");
        // width.innerHTML = window.innerWidth;
        // height.innerHTML = window.innerHeight;
        function foyTimeout(){
            var timeOut = setTimeout(anotherTimeout, 3000);
        }
        function anotherTimeout(){
            const date = new Date("2023-03-14T12:00:00Z");
            const now = new Date();

            var distance = (date - now)

        
            console.log(distance);
        }
        function foyInterval(){
            var interval = setInterval(anotherInterval, 1000);
        }
        function anotherInterval(){
            const date = new Date();
            const options = { hour: 'numeric', minute: 'numeric', second: 'numeric' };
            const formattedDate = date.toLocaleString('en-US', options);
            document.getElementById('foyDate').innerHTML = formattedDate;
        }
        function openWindow(){
            // window.alert("hello");
            // if(confirm("Are you sure you want to")){
            //     printMore();
            // };
            let person = prompt("Prompt");
            if( person ){
                printMore();
            }
            function printMore(){
                console.log(navigator.cookieEnabled);
                console.log(navigator.appCodeName);

                console.log(navigator.appName);
                console.log(navigator.platform);
                console.log(navigator.onLine);
                console.log(navigator.userAgent);
            }
            // history.back();
            // history.forward();

            // myWindow = window.open("http://google.com");
            // console.log(screen.availWidth);
            // console.log(screen.colorDepth);
            // console.log(screen.pixelDepth);
            // console.log(window.location.href);
            // console.log(window.location.hostname);
            // console.log(window.location.pathname);
            // console.log(window.location.protocol);
            // console.log(window.location.port);
            // window.location.assign("https://www.w3schools.com")
        }
        function closeWindow(){
            console.log("hjdba");
            myWindow.close();
        }
    </script>
<?php include 'shared/footer.php';?>

