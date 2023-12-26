<html>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@800&family=Bungee+Spice&family=Itim&family=Libre+Franklin:wght@100;300&family=Noto+Sans+Cypro+Minoan&family=Poppins:wght@800&family=Roboto+Mono:wght@300&family=Victor+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>
    <?php $multi_x = 2; ?>
    <?php $result = 0; ?>

    <div class=h1div>
        <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    </div>
    
        <div class=container>
            <div class=multitable>
                <?php 
                    for($i=1 ; $i <= 24 ; $i++){
                        echo "$multi_x x $i = ".($multi_x * $i);
                        echo "<br>";
                    }
                ?>
            </div>
        </div>
    

    <style>
        


        .multitable{
            margin: 100px;
            width: 300px;
            height: 400px;
            overflow-x: hide;
            overflow-y: scroll;
           
    
            font-size: 40px;
            font-family: Itim;

            display: flex;
            justify-content: center;

            background: #EAD196;

            
            text-transform: uppercase;
            color: black;
            /* text-shadow: 1px 1px 1px white, 1px 2px 1px white, 1px 3px 1px white, 1px 4px 1px white, 1px 5px 1px white, 1px 6px 10px white; */
            /* text-shadow: 1px 1px 1px black, 1px 2px 1px black, 1px 3px 1px black, 1px 4px 1px black, 1px 5px 1px black, 1px 6px 10px black; */
        }

       
        .h1div{

            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #7D0A0A;
            margin: 0;
            font-size: 30px;
            
            width: 100%;
            
        }

        h1{
            font-family: Itim;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: white;
            text-align: center;
            text-wrap: balance;
            text-shadow: 1px 1px 1px black, 1px 2px 1px black, 1px 3px 1px black, 1px 4px 1px black, 1px 5px 1px black, 1px 6px 10px black;
        }

        .container{
            
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            
            margin: 0px;
            padding: 0px;
            overflow: auto;
            
        }

        body{
            margin: 0px;
            padding: 0px;
            height: 400px;
            background: #F3EDC8;
        }
        
        * {
            font-family: 'Asap Condensed', sans-serif;
            font-family: 'Bungee Spice', sans-serif;
            font-family: 'Libre Franklin', sans-serif;
            font-family: 'Noto Sans Cypro Minoan', sans-serif;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto Mono', monospace;
            font-family: 'Victor Mono', monospace;
        }

        /* @media only screen and (max-width: 768px){
        .container{
            display: flex;
            flex-direction: column;
            margin: 100px;
            width: 400px;
            height: 600px;
        }

        .multitable{
            margin: 100px;
            width: 400px;
            height: 600px;
            overflow-x: hide;
            overflow-y: scroll;
           
    
            font-size: 50px;
            font-family: Itim;

            display: flex;
            justify-content: center;

            background: #EAD196;

            
            text-transform: uppercase;
            color: black;
        } */
}

    </style>

</body>

</html>