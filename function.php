<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Object</h1>
            <h1 id="object_text" class="foy-text-center fow-w-300 foy-m-0-a"></h1>
        </div>
    </div>
    <script>
        function myFunction(a, b){
            console.log(a*b);
        }
        myFunction(3, 4);
        const x = function(a, b){ return a * b };
        console.log(x(2,3));
        (function myFunction( ){
            console.log("hello");
        })();

        const nm = (n, m ) => n*m;
        var m = nm(2,5);
        console.log(m);
        maxNum = max(1,2,3,5,4,9,6,7);
        function max(){
            console.log(arguments);
        }

        // const setvar = new Set(['a', 'b', 'a', 'd']);
        // const mapvar = new Map([
        //     ["firstName", 'shah'],
        //     ["lastName", 'fayez'],
        // ]);
        
        // const arrowFunction = (x, y) => {return x + y};
        // // (function xyz(){
        // //    console.log("hello world");
        // // })();
        // function xyz(x, y){
        //    console.log(arguments);
        //    return x+y;
        // }
        // var m = console.log(xyz(40, 60));

        // console.log(arrowFunction(10, 20));
        // setvar.add('n');
        // console.log(mapvar.values());
        // const var1 = {
        //     fullname: function(){
        //         return this.firstname+" "+this.lastname;
        //     }
        // }
        // const var2 = {
        //     firstname: "shah",
        //     lastname: "fayez"
        // }
        // console.log(var1.fullname.call(var2));
    </script>
<?php include 'shared/footer.php';?>