<?php
    $title = 'Coin-Flip';
    $tail = 'https://www.nicepng.com/png/full/146-1464848_quarter-tail-png-tails-on-a-coin.png';
    $head = 'https://cdn.clipart.email/b71d324704226dd3444f0734cfc28f2d_washington-silver-quarter-obverse-coin-heads-and-tails-clip-art-_920-815.jpeg';
    $array = array($tail, $head);
    $result = $array[array_rand($array, 1)];

    if($result == 1){
        print 'kurwa';
    } else if($result == 0){
        print 'kurwa1';
    }
?>

<html>
<head>
    <title><?php print $title?></title>
    <style>
        .center{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .coin{
            width: 300px;
            height: 300px;
            background: url("<?php echo $result?>");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }
        *{
            border: 1px solid red;
        }

    </style>
</head>
<body class="center">
    <div class="coin">
    </div>
    <span>asdsd</span>
</body>
</html>
