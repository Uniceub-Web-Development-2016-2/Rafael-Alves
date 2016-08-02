<?php
    echo $_POST['value'];
$num = strlen($_POST['value']);
if($num > 5){
echo "Mais que 5 caracteres na string";
}else{
echo "Menos que 5 caracteres na string";
}
?>
<form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form>
