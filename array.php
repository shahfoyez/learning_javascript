<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Array</h1>
            <h1 id="demo2" class="foy-text-center fow-w-300 foy-m-0-a mt-50">String Method</h1>
            
            <p class="foy-text-center foy-bold m-0">String Length</p>
            <p id="str_length" class="foy-text-center m-0"></p>
            <div id="list">
                
            </div>

        </div>
    </div>
    
   
    <script src="./assets/js/array.js"></script>

    <script>
        const cars = ["volvo", "BMW", "Toyota"];
        const engines = ["1998", "1992", "1995"];
        const con = cars.concat(engines);
        // engines.splice(2,0, "lemon", "kiwi");
        const slice = engines.slice(1);
        console.log(slice);

        cars.pop();
        cars.push("hello");
        cars.shift();

        function carsFunction(value){
            text += `<li>${value}</li>`;
        }
        let text = `<ul>`;
        cars.forEach(carsFunction);
        text += `</ul>`;

        const obj = {
            firstname: 'shah',
            lastName: 'foyez',
            age: 25
        }
       
        // let text = `<ul>`;
        // for(let i=0; i<cars.length; i++){
        //     text += `<li>${cars[i]}</li>`;
        // }
        // text += `</ul>`;

        // document.getElementById("list").innerHTML = text;
        // document.getElementById("list").innerHTML = obj.age;
        // document.getElementById("list").innerHTML = cars.toString();
        document.getElementById("list").innerHTML = cars.join(" - ");



    </script>
<?php include 'shared/footer.php';?>