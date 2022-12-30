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
    <script>
        var new_var = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";
        const matches = new_var.match(/dummy/gi);
        const first = new_var.search(/dummy/i);

        const length = matches ? matches.length : 0;
        // console.log(matches);
        // console.log(first >= 0 ? first : 0);

        // console.log(length);
        function linearSearch(arr, c){
            for(let i = 0; i< arr.length; i++){
                if(arr[i] == c){
                    return i;
                }
                return "not found";
            }
        }
    //    console.log(linearSearch(['a', 'b', 'c', 'd'], 'c'));

       function largestearch(new_var){
            let strArr = new_var.split(" ");
            console.log(strArr);
            let len = strArr.length;
            var largest = "";
            var strLen = "";
            var larStr = "";
            for(let i = 1; i< len; i++){
                // console.log(strArr[i]);
                strLen = strArr[i].length;
                if(strLen > largest){
                    largest =  strLen;
                    larStr = strArr[i];
                }
            }
            return [largest, larStr];
        }
       console.log(largestearch(new_var));
        const xyz = {};
        xyz.name = "Hello";
        console.log(xyz.name);



        let text = '{ "employees" : [' +
        '{ "firstName":"John" , "lastName":"Doe" },' +
        '{ "firstName":"Anna" , "lastName":"Smith" },' +
        '{ "firstName":"Peter" , "lastName":"Jones" } ]}';
        // console.log(text);

        var obj  = JSON.parse(text);
        // var tt = new String();
        // console.dir(tt);
        // console.log(obj);
    </script>
<?php include 'shared/footer.php';?>

25-11-2022 - 6.00PM to 8.07 PM
Task: Ajax coupon auto apply functionality
