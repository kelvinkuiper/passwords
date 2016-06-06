<h1>Wachtwoorden opslaan in PHP</h1>
<?php
$password = 'dadada';
echo 'Password: ' . $password . '<br >';

$password_bcrypt = password_hash($password, PASSWORD_BCRYPT);
echo 'BCRYPT: ' . $password_bcrypt . '<br />';

if(password_verify($password, $password_bcrypt)) {
	echo "Wachtwoord komt overeen<br />";
}
else {
	echo "Wachtwoord klopt niet";
}
