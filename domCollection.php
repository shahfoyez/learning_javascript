<?php include 'shared/header.php';?>
    <div class="foy-main"  >
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a mb-10">Navigation</h1>
            <div class="foy-text-center mb-10 foy-parent" id="foy-parent">
                <button id="demo1" class="foy_p">Paragraph 1</button>
                <button id="demo2" class="foy_p">Paragraph 2</button>
            </div> 
        </div>
    </div>
   
    <script>
       
         
        const myCollection = document.getElementsByTagName('button');
        console.dir(myCollection);
        for(let i = 0; i < myCollection.length; i++){
            console.log(myCollection[i]);
            myCollection[i].style.cssText = `
                background: blue;
                padding: 10px; 
                color: #ffffff;
                border: none;
                border-radius: 5px;
            `;
        }

        for(let i = 0; i < myCollection.length; i++){
            myCollection[i].addEventListener('click', buttonEvent);
        }
        function buttonEvent(){
            alert('Clicked ');
        }

        const nodeList = document.querySelectorAll('button');
        console.log(nodeList);



    </script> 
<?php include 'shared/footer.php';?>

