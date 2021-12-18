<html>
    <head>
        <title>Assessment Test</title>
    </head>
    <style>
        .body{
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            align-items: center;

        }

        .body>h1{
          text-align: center;
        }

    </style>
    <body>
        <div class="body">
            <h1>Result showing the four functions of <br> an Array of Laptop</h1>


        <?php
            include 'logic.php';


                        $get = new LaptopBrand;
                          $get->sum()."<br>";
                        $get->brand('APPLE');
                        $get->comparePrice('Dell', 'Hp');
                        $get->highestPrice();



        ?>
        </div>
    </body>
</html>
