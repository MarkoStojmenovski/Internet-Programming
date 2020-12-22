<html>
        <body>
            <form action="temperature.php" method="post">
                Change from Fahrenheit to Celsius:<input type="text" name="temp">
                <input type="submit" name="submit">
            </form>
        </body>
</html>
<?php
include('convertTemp.php');
?>