<meta charset="UTF-8">
<form method="POST" action="">
<input name="silnia"></input><br>
<input name="fib"></input><br>
<button type="submit" name="OK">OK</button>
</form>
 
 
 

 <?php
  $s;
       
  $silnia = 1;
  for ($i=1; $i<=$n; $i++) {
    $silnia *= $i;
  }
  echo ("wynosi: "."$n! = $silnia"."<br>");
  if($n<=2)
  echo($n. 'elementem ciagu jest 1');
  else{
  $f1=1;
  $f2=1;
  $temp;
  for($i=3;$i<=$n;$i++){
      $temp=$f1+$f2;
      $f1=$f2;
      $f2=$temp;
  }
  echo($n.'elementem ciagu jest: '.$f2);
}
?>
