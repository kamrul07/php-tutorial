<!doctype html>
<html>
    <?php
    //start session
  session_start();
    
    ?>
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
        <h2 style="font-size:38px;text-align:center">Filter</h2>
      
        
               <br>
               <hr>
               <br> 
        
        <?php
            $r="kamrulhasanshuvo04@gmail.com";
            
            
            if(filter_var($r,FILTER_VALIDATE_EMAIL)){
           
                echo "Valid Email <br>";
                }
            else{
                echo "not valid <br>";
                
            }
            $i="170.0.0.01";
            
            
            if(filter_var($i,FILTER_VALIDATE_IP)){
           
                echo "Valid IP <br>";
                }
            else{
                echo "not valid <br>";
                
            }
            $r="kamrulhasanshuvo.info";
            
            
            if(filter_var($r,FILTER_VALIDATE_URL)){
           
                echo "Valid URL <br>";
                }
            else{
                echo "not valid <br>";
                
            }
            $r=20;
            
            
            if(filter_var($r,FILTER_VALIDATE_INT)){
           
                echo "Valid Integer <br>";
                }
            else{
                echo "not valid <br>";
                
            }
            
        ?>
        
        
        </div>
       <div style="background-color:<?php echo "black";?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>