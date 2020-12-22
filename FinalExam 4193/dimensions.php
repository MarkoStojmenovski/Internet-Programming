<html>
<head>
</head>
<body>
    <?php
    $height = 0;
    $width = 0;
    $top = 0;
    $right = 0;

    if(isset($_GET['height'])){
        $height = $_GET['height'];
    }
    if(isset($_GET['width'])){
        $width = $_GET['width'];
    }
    if(isset($_GET["top"])){
        $top = $_GET["top"];
    }
    if(isset($_GET["right"])){
        $right = $_GET["right"];
    }
    ?>
    <form action="dimensions.php" method="GET">
        Set the dimensions and the position of the color: <br><br>
        Height: <input type="Text" name="height" id="height" value="<?php echo $height;?>" > <br><br>
        Width: <input type="Text" name="width" id="width" value="<?php echo $width;?>" > <br><br>
        Top:<input type="text" name="top" id="top" value="<?php echo $top ?>"><br><br>
        Right:<input type="text" name="right" id="right" value="<?php echo $right ?>"><br><br>
        <input type="submit" value="Scale and position">
    </form>
    <div style="width: <?php echo $width; ?>; height: <?php echo $height; ?>; top: <?php echo $top; ?>; right: <?php echo $right; ?>; background-color: black; position:absolute">
</body>