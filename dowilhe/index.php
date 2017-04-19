<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula12</title>
</head>
<body>
<div>
    <form method="POST" action="dados.php">
        Numero desejado:
        <select name="numero">
            <?php
            $c = 1;

            do{
                echo "<option value='$c'>$c</option>";
                $c++;
            }while ($c <=10 );
            ?>
        </select>
        <input type="submit" value="Calcular">
    </form>
</div>

</body>
</html>