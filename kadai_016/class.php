
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題016</title>
</head>

<body>
    <p>
        <?php
        class Food{
          private $name;
          private $price;

          public function show_price(){
            echo $this-> price."<br>";
          } 

          public function __construct($name,$price){
          $this -> name = $name;
          $this -> price = $price;
          }
        }

          class Animal{
            private $name;
            private $height;
            private $weight;

            public function show_height(){
            echo $this-> height."<br>";        
            }

            public function __construct($name,$height,$weight){
              $this -> name=$name;
              $this -> height=$height;
              $this -> weight=$weight;
            }
          }
          
          $food = new Food ('potato','250');
          $animal = new Animal('dog','60','5000');
          
          print_r($food);
          echo "<br>"; 
          print_r($animal);
          echo "<br>";
          
          $food -> show_price();
          $animal -> show_height();

        ?>
    </p>
</body>

</html>