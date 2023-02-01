<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Dom</h1>
            <p class="foy_p" id="id1"></p>
            <p class="foy_p" id="id2"></p>
            <p class="foy_p" id="id3"></p>

            <p class="foy_anchor" id="id4"></p>


            <form id="frm1" action=""  >
                First name: <input type="text" name="fname" value="Donald"><br>
                Last name: <input type="text" name="lname" value="Duck"><br><br>
                <input type="submit" value="Submit">
            </form> 

            <p>These are the values of each element in the form:</p>

            <p id="demo1"></p>
        </div>
    </div>
    <!-- <script src="./assets/js/dom.js"></script> -->

    <script>
    function submit(){
        const x = document.forms["frm1"];
        console.log(x);
        let text = "";
        for (let i = 0; i < x.length; i++) {
        text += x.elements[i].value + "<br>";
        }
        document.getElementById("demo1").innerHTML = text;
    }
    </script> 
<?php include 'shared/footer.php';?>

