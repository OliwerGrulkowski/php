<meta charset="UTF-8">
<form method="POST" action="">
<input name="silnia"></input><br>
<input name="fib"></input><br>
<button type="submit" name="OK">OK</button>
</form>

<?php
if (isset($_POST['wyslij'])){
    $silnia = $_POST['silnia'];
    $fib = $_POST['fib'];

}



       
$silnia = 1;
for ($i=1; $i<=$n; $i++) {
  $silnia *= $i;
}
echo ("$n! = $silnia");
 
$n = 10;  
 
if($n<=2) echo($n.' elementem ciagu Fibonacciego jest 1');
else{
$f1=1; 
$f2=1; 
$temp; 
for($i=3;$i<=$n;$i++){
$temp=$f1+$f2;
$f1=$f2;
$f2=$temp;

$temp=1+1=2;
$f1=$f2=1;
$f2=$temp=2;
 
$temp=1+2=3;
$f1=$f2=2;
$f2=$temp=3;

}
echo($n.' elementem ciagu Fibonacciego jest '.$f2);
}


?>