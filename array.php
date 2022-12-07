<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Array</h1>
            <h1 id="demo2" class="foy-text-center fow-w-300 foy-m-0-a mt-50">String Method</h1>
            
            <p class="foy-text-center foy-bold mt-10">String Length</p>
            <p id="str_length" class="foy-text-center m-0"></p>
            <div id="list" class="foy-text-center">
                
            </div>

            <p class="foy-text-center foy-bold mt-10">Date</p>
            <div id="new_date" class="foy-text-center">
                
            </div>

            <p class="foy-text-center foy-bold mt-10">Math</p>
            <div id="demo1" class="foy-text-center">
                
            </div>

            <p class="foy-text-center foy-bold mt-10">Test</p>
            <div id="demo2" class="foy-text-center">
                
            </div>

            <p class="foy-text-center foy-bold mt-10">Test</p>
            <div id="demo3" class="foy-text-center">
                
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

        const new_date = new Date();
        // const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const months = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];

        // var str = "January is a good month than February";
        

        function check(sentence){
            let count = 0;
            const letters = Array.from(sentence);
            letters.forEach(function(value){
                if(months.includes(value)){
                    count++;
                    // console.log(value);
                }
            }); 
            return count;
        }
        let c = check("January is a good month than February");
        let day1;
        switch (new Date().getDay()) {
        case 0:
            day1 = "Sunday";
            break;
        case 1:
            day1 = "Monday";
            break;
        case 2:
            day1 = "Tuesday";
            break;
        case 3:
            day1 = "Wednesday";
            break;
        case 4:
            day1 = "Thursday";
            break;
        case 5:
            day1 = "Friday";
            break;
        case  6:
            day1 = "Saturday";
        }
        console.log(day1);

        console.log(Boolean(10>2));  

        const minute = 1000 * 60;
        const hour = minute * 60;
        const day = hour * 24;
        const year = day * 365;

        let years = Math.round(Date.now() / year);
        // Math.
        const today = new Date();
        const da = today.getMonth();
        const mapVar = new Map();
        mapVar.set("name", "fayez");
        mapVar.set("age", 25);
        console.log(mapVar.get("age"));
        // mapVar.delete("name");
        for(const mapSingle of mapVar.entries()){
            console.log(mapSingle);
        }
        // console.log(typeof mapVar);


        mapVar.forEach(function(value, key){
            console.log(value+key);
        });
        // const setVar = new Set(['a', 'b', 'c', 'd', 'a']);
        // setVar.add('x');
        // setVar.forEach(function(value){
        //     console.log(value);
        // });

        // const person = {fname:"John", lname:"Doe", age:25};
        
        // console.log(person.age);

        // for(let x of months){
        //     console.log(x);
        // }

        // let i = 0;
        // do{
        //     console.log(i);
        //     i++;
        // }
        // while(i <10);
        var xyz = 10.6;
        var xyz = Math.floor(Math.random() * 1000);
        document.getElementById("list").innerHTML = num_sort;
        // document.getElementById("new_date").innerHTML = text;
        // document.getElementById("new_date").innerHTML = months[new_date.getDate()];
        document.getElementById("new_date").innerHTML = today.setMonth(today.getMonth() + 50);
        document.getElementById("demo1").innerHTML = xyz;

    </script>
<?php include 'shared/footer.php';?>