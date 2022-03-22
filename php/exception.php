<?php
    echo "hello world! <br>";

    class CustomException extends Exception{

        function showException(){
            $error = " <br> Custom Message : ". $this->getMessage()." <br> Exception Ocurred at line no : " . $this->getLine();
            return $error;
        }
    }

    function division($divident, $diviser){
        try{
            if ($diviser == 0)
                throw new CustomException("<b> This is the custom exception </b>");
            
            elseif($divident < $diviser){
                throw new Exception("This is an exception : divient is smaller than divisior ");
            }
            
            else{
                return $divident/$diviser."<br>";
            }
        }
        catch(Exception $e){
            echo "<hr>";
            echo "<br> <b> Message : </b>".$e->getMessage();
            echo "<br> <b> Line : </b>".$e->getLine();
            echo "<br> <b> Code : </b>".$e->getCode();
            echo "<br> <b> File : </b>".$e->getFile();
            echo "<br> <b> Trace : </b>".$e->getTrace();
            echo "<br> <b> TraceAsStriong : </b>".$e->getTraceAsString();

         
        }
        catch(CustomException $e){
            echo "<hr>";
            echo $e->showException();
        }
        finally{
            echo "<br> Finally block is executed : ";
            
        }
    }


    echo division(16, 4);
    echo division(16, 32);
    echo division(16, 0);

 
?>