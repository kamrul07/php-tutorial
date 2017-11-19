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
        <h2 style="font-size:38px;text-align:center">Explode - Implode</h2><br>
        <h2 style="font-size:38px;text-align:center">Explode - used to convert string to array.  Implode - used to convert array to string</h2>
      
        
               <br>
               <p>Explode</p>
               <hr>
               <br> 
        
        <?php
            $s="I love lisa";
            $p=explode(" ",$s);
       foreach($p as $p){echo $p."<br>";}
          
            
            
        ?>
         
            <br>
             <p>Implode</p> 
              
               <hr>
               <br>
        <?php
            $s=array("I", "love", "lisa");
            $p=implode(" ",$s);
      echo $p;
          
            
            
        ?>
        
        </div>
       <div style="background-color:<?php echo "black";?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>