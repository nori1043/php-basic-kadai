<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
        
      function soft_2way($array, $order) {

        if($order) {
        echo "昇順にソートします。<br>";
        sort($array);
        foreach($array as $num) {
        echo $num . "<br>";
        }
        }
        else {
        echo "降順にソートします。<br>";
        rsort($array);
        foreach($array as $num) {
        echo $num . "<br>";
      } 
      } 
      }

$num = [15, 4, 18, 23, 10 ];

soft_2way($num, true);
soft_2way($num , false); 


        ?>
    </p>
</body>

</html>