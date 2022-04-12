<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Traits</title>
</head>
<body>
    <h1>PHP OOP Traits</h1>
    <h4>Traits are used to declare methods that can be used in multiple classes</h4>
    <?php
trait message1 {
    public function msg1() {
      echo "OOP is fun! "; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();

?>
</body>
</html>