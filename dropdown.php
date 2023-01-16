
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style> 
*{
  margin: 0;
  padding: 0;
  font-family: Sans-serif;
}

body{
  background-color: #eee;

}
nav{
  margin: 20px;
  position: relative;
}
ul{
  list-style: none;
  display: flex;
  align-items: center;
}
.display-picture{
  margin-left: auto;
}
.display-picture img{
  width: 50px;
  border-radius: 50%;
  border:2px solid #fff;
}
.display-picture img:hover{
border:2px solid #E78341;
}
.card{
  transition: 0.5s ease;
}

.card ul{
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  background: #E78341;
  position: absolute;
  top: 4rem;
  right:0rem;
border-radius: 10px;
padding: 10px 50px 10px 20px;
}
.card ul li{
 
  padding: 5px 0;
  color: #FFF;
  font-size: 14px;
}
.hidden{
  display: none;
}
a{
  text-decoration: none;
  color:#fff;
}
</style>
<nav><!--Navigation Bar Starts Here-->
    <ul>
        <a href="#"><li><img src="https://www.logodesign.net/assets/images/new-ui/logo.png" alt=""></li></a><!--LOGO-->
        <a href="#" class="display-picture"><img src="https://i.pravatar.cc/85" alt=""></a><!--Profile Image-->
    </ul>
    <div class="card hidden"><!--ADD TOGGLE HIDDEN CLASS ATTRIBUTE HERE-->
        <ul><!--MENU-->
          <li><a href="#">Profile</li></a>
          <li><a href="#">Account</li></a>
          <li><a href="#">Settings</li></a>
          <li><a href="#">Log Out</li></a>
        </ul>
    </div>
</nav><!--Navigation Bar Starts Here-->
<h2>***Click on the Profile Image***</h2>
 
  <?php
  // Open the file in write mode
  $handle = fopen( 'hello.txt', 'w' );
  // Write the data to the file
  fwrite( $handle, 'This is the data that will be inserted into the file.' );
  // Close the file
  fclose( $handle );
?>
 
</body>
</html>
 
<script>
    let card = document.querySelector(".card"); //declearing profile card element
    let displayPicture = document.querySelector(".display-picture"); //declearing profile picture

    displayPicture.addEventListener("click", function() { //on click on profile picture toggle hidden class from css
    card.classList.toggle("hidden")})
</script>

 