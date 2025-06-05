<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background: rgb(240,0,50);
  
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.topnav a.active {
  background-color: black;
  color: white;
}

.nav-left a,
.nav-right a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
    font-weight: bold;
}

.nav-left a:hover,
.nav-right a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="<?php echo('index1.php') ?>">Hlavní stránka</a>
      <a class="nav-link nav-left" href="<?php echo('index2.php') ?>">Filmy</a>
      <a class="nav-link nav-left" href="#">Herci</a>
      <a class="nav-link nav-left" href="#">Režiséři</a>
      <a class="nav-link nav-left" href="#">Recenze</a>
      <a class="nav-link nav-right" href="#">Přihlásit se</a>
</div>
</body>
</html>