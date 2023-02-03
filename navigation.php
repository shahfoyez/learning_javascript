<?php include 'shared/header.php';?>
    <div class="foy-main"  >
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a mb-10">Navigation</h1>
            <div class="foy-text-center mb-10 foy-parent" id="foy-parent">
                <p id="demo1"></p>
                <p id="demo2"></p>
            </div> 
            <h1 id="id01">
                <p>My First Page</p> 
                <p>My Second Page</p> 
            </h1>
            <p id="id02"></p>
        </div>
    </div>
   
    <script>
        const para = document.createElement('p');
        const node = document.createTextNode('This is a node');
        para.appendChild(node);
        // const node1 = document.createTextNode('This is a node 01');
        // para.appendChild(node1);

        const element = document.getElementById('id01');
        element.appendChild(para);
    </script> 
<?php include 'shared/footer.php';?>

