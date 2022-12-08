<?php
    include 'database/database.php';
    
    if(isset($_POST['submit'])){
        $barcode = $_POST['barcode'];
        echo $barcode;
        echo "<br>";
        $query = "INSERT INTO barcodes(barcode) VALUES ('$barcode')";
        $insert = $mysqli->query($query);
        if ($insert) {
            // echo "New record created successfully";
            // echo "<br>";
            header('Location: http://localhost/Javascript/barcode.php');
            
        } else {
            echo "Something went wrong";
            echo "<br>";
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost/Javascript/assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
</head>
<!-- onload="document.pos.barcode.focus();" -->
<body >
    <div class="foy-main">
        <div class="foy-container">
            <form method="POST" action="barcode.php">
                <input type="text" name="barcode" placeholder="Barcode">
                <input type="submit" name="submit">
            </form>
        </div>
    </div>
    <script>

    </script>
<?php include 'shared/footer.php';?>