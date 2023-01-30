<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Javascript Class</h1>
            <p id="demo" class="foy-text-center m-0"></p>
            <div id="list" class="foy-text-center">
                
            </div>
        </div>
    </div>
    <script>
        console.log("Line 1");
        setInterval(function(){
            console.log("Line 2");
        }, 2000)
        console.log("Line 3");

        class Car{
            constructor(name, year){
                this.name = name;
                this.year = year;
            }
            getCar(){
                return this.name + " " + this.year;
            }
            static foy(){
                return "Hello there!";
            }
        }
        class Model extends Car{
            constructor(model, name, year){
                super(name, year);
                this.model = model;
            }
            show(){
                return this.getCar() + " it is a " + this.model;
            }
        }
        const car = new Model("i8", "BMW", 1998);
        console.log(car.show());
        console.log(Car.foy());


        function display(sum){
            console.log(sum);
        }
        function calculator(var1, var2, callback){
            let sum = var1 + var2;
            callback(sum); 
        }
        calculator(10, 20, display);
    </script> 
<?php include 'shared/footer.php';?>

