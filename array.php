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
        const numbers = [22, 101, 23, 120];
        let num_sort = numbers.sort(function(a, b){
            return a  - b;
        });
        // numbers.forEach(iterate);
        
        // function iterate(value, index, array){
        //     console.log(value);
        // }

        // var numbers1 = numbers.map(iterate);
        
        // function iterate(value){
        //     return value * 2;
        // }
        // console.log(numbers1);

        // var numbers1 = numbers.filter(iterate);
        
        // function iterate(value){
        //     return value > 30;
        // }
        // console.log(numbers1);

        // var numbers1 = numbers.reduce(iterate);
        
        // function iterate(total, value){
        //     return total + value;
        // }
        // console.log(numbers1);

        // var numbers1 = numbers.some(iterate);
        
        // function iterate(value){
        //     return value > 40;
        // }
        // console.log(numbers1);

        var numbers1 = numbers.find(iterate);
        
        function iterate(value){
            return value > 40;
        }
        console.log(numbers1);
        let arif = "BIYEKORTECHAI";
        let arif_array = Array.from(arif);
        console.log(arif_array);

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

        const obj = [
            {
                firstname: 'shah',
                lastName: 'foyez',
                age: 25
            },
            {
                firstname: 'ali',
                lastName: 'khan',
                age: 30
            },
            {
                firstname: 'arif',
                lastName: 'ghani',
                age: 22
            }
        ]
        let obj_sort = obj.sort(function(a,b){
            var a = a.age;
            var b = b.age;
            return b - a;
        });
       
        Math.max.apply(numbers);

        document.getElementById("list").innerHTML = num_sort;
    </script>
<?php include 'shared/footer.php';?>