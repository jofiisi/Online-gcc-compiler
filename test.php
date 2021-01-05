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
                $Name = $_POST["Name"];
                $test = $_POST["testTxt"];
                $fileC = fopen("cCompiler/$Name.c", "w");
                fwrite($fileC, $test);
                passthru("export PATH=$PATH:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin; gcc ./cCompiler/$Name.c -o ./cCompiler/$Name.out  2>&1");
                passthru("export PATH=$PATH:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin;x86_64-w64-mingw32-gcc -o ./cCompiler/$Name.exe ./cCompiler/$Name.c 2>&1");
                passthru("./cCompiler/$Name.out 2>&1");
            ?>
        </span>     
                <br>     
                <a href="./cCompiler/<?php echo $Name?>.c"><?php echo $Name?>.c</a>
                <br>
                <a href="./cCompiler/<?php echo $Name?>.out"><?php echo $Name?>.out</a>
                <br>
                <a href="./cCompiler/<?php echo $Name?>.exe"><?php echo $Name?>.exe</a> 
    </body>
</html>