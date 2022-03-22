<?php
//echo "<b> We are trying to read a text file, located at : /home/prem/Documents/Test Files/readfile-1.txt </b> <br>";

class FileHandling{
    const FILE_PATH = "/home/prem/Documents/Test Files";
    const READING_MSG = "READING THE FILE USING";
    const WRITING_MSG = "WRITING THE FILE";
    const FILE_FOUND = "<b> File Found and Trying to read...</b> <br>";
    const FILE_NOT_FOUND = "<div style= 'text-align:center'> <br> <b> File Not Found </b> </div>";
    
    public  $file_obj;

    function openReadFile(){
        try{      
            echo "<div style = 'text-align: center'> <br>" . self::READING_MSG . "<b> fopen() & fread() </b> </div>";
            if(file_exists(self::FILE_PATH . "/readfile-1.txt")){
                echo self::FILE_FOUND;
                $file_obj = fopen(self::FILE_PATH . "/readfile-1.txt", "r");
                echo fread($file_obj, filesize(self::FILE_PATH . "/readfile-1.txt"));
            }
            else{
                throw new Exception(self::FILE_NOT_FOUND);
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        finally{
            fclose($file_obj);
            // echo "close";
        }
    }

    // Read File - line by line
    function openRLF(){
        try{      
            echo "<div style = 'text-align: center'> <br>" . self::READING_MSG . "<b> fopen() & fgets() </b> </div>";
            if(file_exists(self::FILE_PATH . "/readfile-1.txt")){
                echo self::FILE_FOUND;
                $file_obj = fopen(self::FILE_PATH . "/readfile-1.txt", "r");

                while(!feof($file_obj))
                    echo fgets($file_obj);
            }
            else{
                throw new Exception(self::FILE_NOT_FOUND);
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        finally{
            fclose($file_obj);
            // echo "close";
        }
    }

    // Read File - char by char
    function openRCF(){
        try{      
            echo "<div style = 'text-align: center'> <br>" . self::READING_MSG . "<b> fopen() & fgetc() </b> </div>";
            if(file_exists(self::FILE_PATH . "/readfile-1.txt")){
                echo self::FILE_FOUND;
                $file_obj = fopen(self::FILE_PATH . "/readfile-1.txt", "r");

                while(!feof($file_obj))
                    echo fgetc($file_obj);
            }
            else{
                throw new Exception(self::FILE_NOT_FOUND);
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        finally{
            fclose($file_obj);
            // echo "close";
        }
    }

    function readFile(){
        try{
            echo "<div style = 'text-align: center'> <br>" . self::READING_MSG . "<b> readfile() </b> </div>";
            if(file_exists(self::FILE_PATH . "/readfile-1.txt")){
                echo self::FILE_FOUND;
                readfile(self::FILE_PATH . "/readfile-1.txt","r");
            }
            else{
                throw new Exception(self::FILE_NOT_FOUND);
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    function writeFile(){
        // if(is_writable(self::FILE_PATH . "/writefile-1.txt")){
        //     echo "YES";
        // }
        // else{
        //     echo "NO";
        // }
        echo "<div style = 'text-align: center'> <br>" . self::WRITING_MSG . "<b> writefile() </b> </div>";
        if(file_exists(self::FILE_PATH . "/writefile-2.txt")){
            echo self::FILE_FOUND;
            $txt = "* * this text is appended * *";
            $file_obj = fopen(self::FILE_PATH . "/writefile-2.txt", "a");
            if (fwrite($file_obj, $txt) === false){
                echo "Cannot write to file ($filename)";
            }
            else{
                echo "Success, wrote ($txt) to file (" . self::FILE_PATH . "/writefile-2.txt)";

            }
        }
        else{
            throw new Exception(self::FILE_NOT_FOUND);
        }

    }
}

$file = new FileHandling();
$file->openReadFile();
echo "<br>";
$file->openRLF();
echo "<br>";
$file->openRCF();
echo "<br>";
$file->readFile();
echo "<br>";
$file->writeFile();

?> 
