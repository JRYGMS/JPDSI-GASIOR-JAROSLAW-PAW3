<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_k">Podaj kwotę: </label>
	<input id="id_k" type="text" name="k" value="<?php if(isset($k)) print($k); ?>" /><br />

	<label for="id_l">Podaj ilość lat: </label>
	<input id="id_l" type="text" name="l" value="<?php if(isset($l)) print($l); ?>" /><br />

    <label for="id_opr">Podaj oprocentowanie: </label>
	<input id="id_opr" type="text" name="opr" value="<?php if(isset($opr)) print($opr); ?>" /><br />

	<input type="submit" value="Oblicz" />
</form>

<?php
if (isset($messages)) {
	if (count($messages)>0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #F78468; width: 300px;">';
		foreach($messages as $key => $msg) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php 
if(isset($result)) {
    echo '<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #98F768; width: 300px;">';
    echo 'Rata miesięczna: '.$result;
    echo '</div>';
}
?>

</body>
</html>