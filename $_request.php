<!doctype html>
<html>
    
    <head>
    <title>Learn with me - array sourch code for practise</title>    
    </head>
    <body style="margin:0 auto;width:960px;background:#EAEAEA">
        
        <div style="background-color:<?php echo "white";?>;width:100%;margin:0 auto;overflow: hidden;" >
        <div style="background-color:<?php echo "black";?>;overflow: hidden;" >
            
            <h2 style="color:white;text-align:center;font-size:48px;padding: 27px;">Php tutorial with shuvo</h2>
            <h2 style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </h2>
        </div>
        <div id="content" style="min-height:68vh;padding:20px">
        <h2 style="font-size:38px;text-align:center">Supper global varriable $_REQUEST</h2>
      
        
               <br>
               <hr>
               <br> 
        <form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
           Username: <input type="text" name="name">
      <input type="submit" name="name'">
           
           
           <?php
    
      
    if($_SERVER['REQUEST_METHOD'] == "POST"){
     
         $name = $_REQUEST['name'];
        
        if(empty($name)){
            echo "Fill up the form" . $name;
            
            
        }else{
            
            echo "Thank you " . $name;
        }
        
  
        
    }
        
    
            ?>
            
            
        </form>
        
        </div>
       <div style="background-color:<?php echo "black";?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>