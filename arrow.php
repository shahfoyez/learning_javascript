<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Arrow Function</h1>
            
            
            <p class="foy-text-center foy-bold mt-10">String Length</p>
            <p id="demo" class="foy-text-center m-0"></p>
            <button id="btn">Click</button>
            <div id="list" class="foy-text-center">
                
            </div>
        </div>
    </div>
    
    <script src="./assets/js/car.js"></script>
    <script>
        // function myFunction(){
        //     console.log("Hello");
        // }
        // let hello = "";
        
        // hello = (a) => {
        // return "Hello World!" + a;
        // }
        // class Car{
        //     constructor(name, model){
        //        this.name = name;
        //        this.model = model; 
        //     }
        //     message(){
        //         return this.year;
        //     }
        // }
        // let car = new Car("volvo", "1992");
        // let mess = car.message();
        // console.log(mess);
        let myCar = new Car("Ford", 2014);
        console.log(myCar.age(30));
 
        // Arrow function
        hello = () => {
            document.getElementById("demo").innerHTML += this;
        }
        // window.addEventListener("load", hello);
        // document.getElementById("btn").addEventListener("click", hello);
      
    </script>
    <script src="./assets/js/car.js"></script>
<?php include 'shared/footer.php';?>