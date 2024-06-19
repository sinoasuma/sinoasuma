<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function get_price() {
        return $this->price;
      }

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }
    $food = new Food('potato', 250);
    print_r($food);
    echo '<br>';

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function get_height() {
        return $this->height;
      }

      public function __construct(string $name, int $height, string $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
    $animal = new Animal('dog', 60, 5000);
    print_r($animal);
    echo '<br>';

    echo "食べ物の価格: " . $food->get_price() . '<br>';
    echo "動物の身長: " . $animal->get_height() . '<br>';
    ?>
  </p>
</body>
</html>
