// index.php
<!DOCTYPE html>
<html>
<head>
<title>TP GIT</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css" />
</head>
<body>
<h2>Welcome, <?php if (isset($_GET["name"])) echo $_GET["name"];
?></h2>
<div class="w3-container w3-third"></div>
<div class="w3-container w3-third">Contenu formulaire</div>
<div class="w3-container w3-third"></div>
</body>
</html>
