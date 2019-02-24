<?php
error_reporting(0)
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>
<body>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <form action="index2.php" method="post">
                <label> Number One</label><br>
                <input type="number" name="numberone" placeholder="Input your first number"><br>
                <label> Number Two</label><br>
                <input type="number" name="numbertwo" placeholder="Input your second number"><br>
                <button type="submit" name="add"> Add</button>
                <button type="submit" name="sub">Sub</button>
                <button type="submit"  name="multi"> Multi</button>
                <button type="submit" name="divi"> Divi</button>
            </form>
        </div>
    </div>
</div>

<?php
$a=$_POST['numberone'];
$b=$_POST['numbertwo'];
if(isset($a) and ($b)){
    echo "Your First Number is ".$a;
    echo "Your second number is ".$b;
    echo "<br>";
   }
else{
    echo "emty is Not excepted ";
}

if(isset($_POST[add])){
    $result=new calculator;
    $result->add($a,$b);


}
elseif(isset($_POST['sub'])){
    $result=new calculator;
    $result->sub($a,$b);

}
elseif (isset($_POST['multi'])){
    $result=new calculator;
    $result->multi($a,$b);
}
elseif (isset($_POST['divi'])){
    $result=new calculator;
    $result->divi($a,$b);
}
?>

<?php
 class Calculator {
     public function add($a,$b){
         echo $a+$b;

     }
     public function sub($a,$b){
          echo $a-$b;

     }
     public function multi($a,$b){
         echo $a*$b;
     }
     public function divi($a,$b){
         echo $a/$b;

     }
 }

?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>