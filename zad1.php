<meta charset="UTF-8">
<form method="POST" action="">
<input name="Imie"></input><br>
<input name="Nazwisko"></input><br>
<button type="submit" name="wyslij">wyslij</button>
</form>

<?php
if (isset($_POST["wyslij"])){
    $Imie = $_POST["Imie"];
    $Nazwisko = $_POST["Nazwisko"];

    echo "witaj ". $Imie .$Nazwisko."<br>";
}

?>