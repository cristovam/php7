<?php
require_once("config.php");

echo "nome: " . $_SESSION['nome'];
echo "<br>";
echo "idade: " . $_SESSION['idade'];
echo "<br>";
echo session_id();

?>