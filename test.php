
<!DOCTYPE html>
<html>
    <head>
        <title>jofis php</title>
        <link rel="stylesheet" type="text/css"
        href="sytle.css" >
    </head>
    <body>
        <span id="g100">
            <?php
                $Name = ($_POST[dataName]);
                $test = ($_POST[testTxt]);
                $fileC = fopen("cCompiler/$Name.c", "w");
                fwrite($fileC, $test);
                passthru("./compile.sh"  $Name);
                echo($output $Name);
            ?>
        </span>     
                <br>     
                <a href="./cCompiler/$<?php echo $Name?>.c">$<?php echo $Name?>.c</a>
                <br>
                <a href="./$<?php echo $Name?>.out">$<?php echo $Name?>.out</a>
                <br>
                <a href="./<?php echo $Name?>.exe">$<?php echo $Name?>.exe</a>
    </body>
</html>