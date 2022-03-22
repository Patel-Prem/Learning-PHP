<?php

echo "<b> Error handling using die() </b> <br> ";
if (!file_exists(newfile.txt))
    die("File not Found");
else   
    echo "File successfully found";

?>