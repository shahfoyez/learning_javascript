<?php include 'shared/header.php';?>
    <div class="foy-main"  >
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a mb-10">Navigation</h1>
            <div class="foy-text-center mb-10 foy-parent" id="foy-parent">
                <div id="div1">
                    <p id="p1">This is a paragraph.</p>
                    <p id="p2">This is another paragraph.</p>
                </div>
            </div> 
        </div>
    </div>
   
    <script>
       const para = document.createElement("p");
        const node = document.createTextNode("This is new.");
        para.appendChild(node);

        const element = document.getElementById("div1");
        const target = document.getElementById("p1");
        // element.replaceChild(para, target);
        element.insertBefore(para, target);
        // target.remove();
        // removeChild is more browser friendly
        element.removeChild(target);

    </script> 
<?php include 'shared/footer.php';?>

