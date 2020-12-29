
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
                $test = ($_POST[testTxt]);
                $fileC = fopen("cCompiler/test.c", "w");
                fwrite($fileC, $test);
                passthru("./compile.sh");
                echo($output);
            ?>
        </span>
        <br>
        <br>
        <a href="./cCompiler/test.c">C Datei herunterladen</a>
        <br>
        <a href="./a.out">Out Datei herunterladen</a>
        <br>
        <a href="./test.exe">exe Datei herunterladen</a>
    </body>
</html>
