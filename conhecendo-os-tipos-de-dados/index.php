<?php
//Conhecendo os tipos de dados em PHP
?>
<!DOCTYPE html>
<html>
<head>
<title>Conhecendo os tipos de dados em PHP</title>
</head>
<body>
<?php
$birthYear = "1980";
$fullName = "Cristovam Ruiz Junior";
?>
<p><strong>Birth Year:</strong> <?php if (isset($birthYear)) echo $birthYear; ?></p>
<p><strong>Full Name:</strong> <?php if (isset($fullName)) echo $fullName; ?></p>

<?php
$guitars = array("Fender Stratocaster CIJ Reissue 54", "Tagima Telecaster T505 2001", "Aria FA80 MIJ w/ Bigsby");
$myGuitars = implode(", ", $guitars) . ".";
?>
<p><strong>Guitar(s):</strong> <?php echo $myGuitars; ?></p>

<?php
$dir = "C:/xampp/htdocs/aulas/php7/conhecendo-os-tipos-de-dados/files";
$fileNames = array_slice(scandir($dir), 2);

function add_link_path($file) {
	return '<a href="files/' . $file . '" target="_blank">' . $file . "</a>";
}
$filePaths = array_map("add_link_path", $fileNames);
$files = implode(", ", $filePaths);
?>
<p><strong>Partituras/Tablaturas:</strong> <?php echo $files; ?></p>
</body>
</html>
