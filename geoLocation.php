<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Fetch API</h1>
            <button onclick="geoLocation()">Geolocation API</button>
            <p id='message'></p>
        </div>
    </div>
    <!-- <script src="./assets/js/fetchPromise.js"></script> -->
    <script src="./assets/js/geoLocation.js"></script>
    <script>
        const x = document.getElementById("message"); 
        function geoLocation(){
            if(navigator.geolocation){
                console.log(navigator.geolocation.watchPosition(showPosition, showError));
            }else{
                x.innerText = "Geolocation is not available"; 
            }
        }
        function showPosition(position){
            x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude
        }
        function showError(error){
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "User denied the request for Geolocation."
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable."
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out."
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred."
                    break;
            }
        }
    </script>
<?php include 'shared/footer.php';?>