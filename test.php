
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
                // print "<span id=\"g100\">".$_POST[testTxt]."</span>";

                /*if(preg_match("/^hallo.*php$/ui",$test))
                {
                    
                }*/
                $fileC = fopen("cCompiler/test.c", "w");
                fwrite($fileC, $test);
                exec("cd home/pi/server-test/cCompiler");
                exec("ggc test.c");
                passthru("./a.out");
            ?>
        </span>
    </body>
</html>
