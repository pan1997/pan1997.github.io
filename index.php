<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <a href="http://pan1997.tk">Home</a>
    <a href="http://github.com/pan1997">Github</a>
</nav>
<div class="sidebar">
    <h1>Pankaj Kumar</h1>
    <p>IIT Delhi</p>
    <p>pankajkumaryadav1997@gmail.com</p>
    <p>cs1140245@iitd.ac.in</p>
    <p>Github Handle: pan1997</p>
</div>

<?php
for($x=0;$x<=10;$x++) {
    ?>
    <div class="section">
        <p>Just some data<?php
        echo $x;
            ?></p>
    </div>
    <?php
}
?>
</body>
</html>