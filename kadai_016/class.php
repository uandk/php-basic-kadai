<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_016</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function __construct(string $name,int $price){
        $this -> name = $name;
        $this -> price = $price;
      }

      public function show_price(){
        echo '<br>';
        echo $this -> price . '<br>';
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name,int $height,int $weight){
        $this -> name = $name;
        $this -> height = $height;
        $this -> weihgt = $weight;
      }

      public function show_height(){
        echo $this -> height . '<br>';
      }
    }

    $food = new Food('potato',250);
    print_r($food);

    $animal = new Animal('dog',60,5000);
    print_r($animal);


    $food -> show_price();
    $animal ->show_height();
    ?>

  </p>
  
</body>
</html>