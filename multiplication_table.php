<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <?php $result = 0; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    
    <div class=container>
        <div>
            <?php 
                for($i=1 ; $i <= 24 ; $i++){
                    echo "<br/> $multi_x X $i = ".($multi_x * $i);
                }
            ?>
        </div>
    </div>

    <style>
        div{
            
            width: 150px;
            height: 265px;
            overflow-x: hide;
            overflow-y: scroll;

            border: 1px solid pink;
        }

        h1{
            
            display: flex;
            justify-content: center;
        }

        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: auto;
        }
    </style>

</body>

</html>