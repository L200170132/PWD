<html>
<head>
<title>Penjumlahan</title>
</head>
<body>
<form method='post' action='tugas2.php'>
<p>Nilai A adalah : <input type='text' name='nilai1' size='3'></p>
<p><input type='submit' value='Cek' name='submit'></p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilai1 = $_POST['nilai1'];
$submit = $_POST['submit'];
if($submit){
    $nilai=$nilai1%2;
    if($nilai=='0'){
    echo"Nilai A adalah bilangan genap.";
}
else{
    echo"Nilai A adalah bilangan ganjil.";
}
}
?>
</body>
</html>