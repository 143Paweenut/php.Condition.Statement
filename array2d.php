<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array </title>
</head>
<body>
    <h1>Array 2D </h1>
    <?php
        $foods = array(
            array("ตำไทย",22,18);
            array("ตำลาว"15,13,);
            array("ตำป่า"5,2,);
            array("ตำมัว"17,15,);
        );
        for ($i=0; $i < 4; $i++){
            echo $foods[i][0]." :จำนวนที่รอปรุง : ".$foods[$i][1]. "จำนวนที่เริพแล้ว :".$foods[$i][2];
            echo "<br>\n";
        }
        echo "<hr>"
    ?>
</body>
</html>