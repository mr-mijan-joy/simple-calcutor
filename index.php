<!DOCTYPE html> 
<html> 
  
<head> 
    <title>HTML Calculator</title> 
  
    <!-- For styling -->
    <style> 
        body{
            background-color: #303841;
        }
        h3{
            display: block;
            text-align: center;
            color: white;
            font-family: sans-serif;
            margin-top: 40px;
            margin-bottom: 20px;
            font-size: 50px;
        }
        table { 
            border: 1px solid #F5F7F8; 
            height: 80%;
            margin-top: 10%;
            margin-right: auto;
            margin-left: auto;
        } 
          
        input[type="button"] { 
            width: 100%; 
            padding: 20px 40px; 
            background-color: #495E57; 
            color: white; 
            font-size: 24px; 
            font-weight: bold; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer;
        } 
          
        input[type="number"] { 
            padding: 20px 30px; 
            font-size: 24px; 
            font-weight: bold; 
            border: none; 
            border-radius: 5px; 
            border: 2px solid #F5F7F8;
            color: white; 
            background-color: #45474B;
        } 
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }

    </style> 
</head> 
  
<body> 

    <h3>Simple Calculator</h3>  

    <!-- Create table -->
    <table id="calcu"> 
        <tr> 
            <td colspan="3"> 
                <input type="number" id="result" name="result"> 
            </td> 
            <td><input type="button" value="c"></td> 
        </tr> 
  
        <tr> 
            <td><input type="button" value="1"></td> 
            <td><input type="button" value="2"></td> 
            <td><input type="button" value="3"></td> 
            <td><input type="button" value="/"></td> 
        </tr> 
        <tr> 
            <td><input type="button" value="4"></td> 
            <td><input type="button" value="5"></td> 
            <td><input type="button" value="6"></td> 
            <td><input type="button" value="*"></td> 
        </tr> 
        <tr> 
            <td><input type="button" value="7"></td> 
            <td><input type="button" value="8"></td> 
            <td><input type="button" value="9"></td> 
            <td><input type="button" value="-"></td> 
        </tr> 
        <tr> 
            <td><input type="button" value="0"></td> 
            <td><input type="button" value="."></td> 
            <td><input type="button" value="="></td> 
            <td><input type="button" value="+"></td> 
        </tr> 
    </table> 
</body> 

<?php 
    $result = "";
    class calculator
    {
        var $a;
        var $b;

        function checkopration($oprator)
        {
            switch($oprator)
            {
                case '+':
                return $this->a + $this->b;
                break;

                case '-':
                return $this->a - $this->b;
                break;

                case '*':
                return $this->a * $this->b;
                break;

                case '/':
                return $this->a / $this->b;
                break;

                default:
                return "Sorry No command found";
            }   
        }
        function getresult($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            return $this->checkopration($c);
        }
    }

    $cal = new calculator();
    if(isset($_POST['submit']))
    {   
        $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
    }
?>


  
</html>
