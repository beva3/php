<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>getData</title>
</head>
<body>
    <div class="content">
       <?php
            $index=$_GET["index"];
       ?> 
        <h2>set value</h2>
        <div class="form">
            <form action="http://localhost/php/traitement.php" method="post">
                <input type="number" name="val_a_modif" id="" required placeholder="enter a">
                <input type="number" name="val_b_modif" id="" required placeholder="enter b">
                <input type="submit" value="Envoye">
                <?php echo "<input type=\"hidden\" name=\"index_modif\" value=\"$index;\"";?>
            </form>    
        </div>
    </div>
</body>
</html>