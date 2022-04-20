<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h3>九九乘法表</h3>
<table border="1" cellspacing="0">
    <?php
    for ($i = 1 ; $i <= 9 ; $i++ ){
        echo "<tr>";
        for ($j = 1 ; $j <= $i ; $j++ ){
            echo "<td>".$i."*".$j."=".$i*$j."</td>";
        }
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>
