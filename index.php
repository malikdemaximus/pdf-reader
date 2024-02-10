<?php
if(isset($_POST['submit'])) {
header('Location:read.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read PDF using PHP</title>
</head>
<style>
  * {
    font-family: sans-serif;
  }
.container {
  height: 34rem;
width: 100%;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
}
button {
height: 50px;
width: 220px;
background-color: crimson;
border: 1px solid black;
font-size: 1.5rem;
cursor: pointer;
}
</style>
<body>
<div class="container">
<div class="wrapper">
<h1 class="hero">Read Pdfs using PHP Script</h1>
</div>
<br><br><br><br>
<div class="wrapper">
<form method="POST">
<button type="submit" name="submit" value="submit">Read Pdf</button>
</form>
</div>
<div class="wrapper">
<h3>Made with by Abdulmalik</h3>
</div>
</div>
</body>
</html>