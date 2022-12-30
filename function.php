<?php include 'shared/header.php';?>
    <div class="foy-main">
        <div class="foy-container">
            <h1 id="demo" class="foy-text-center fow-w-300 foy-m-0-a">Object</h1>
            <h1 id="object_text" class="foy-text-center fow-w-300 foy-m-0-a"></h1>
        </div>
    </div>
    <script>
        const setvar = new Set(['a', 'b', 'a', 'd']);
        const mapvar = new Map([
            ["firstName", 'shah'],
            ["lastName", 'fayez'],
        ]);

        setvar.add('n');
        console.log(mapvar.values());
    </script>
<?php include 'shared/footer.php';?>