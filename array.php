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
        <h2 style="font-size:38px;text-align:center">Array</h2>
        
        <?php 
            echo "Array into array<br><br>";
            $s=array(
            array("a",20,"b"),
            array("t",40,"d"),
            array("i",90, "y")    
            );
           

  for($i=0; $i<3; $i++){
       
     echo $s[0][$i];
      echo "<br>";
      
       
  }
    

            ?> 
        
        
        
        
        
            <br>
            
           <hr>
           <br> 
            
        
       <?php
            echo "Array sorting:<br>";
            $shuvo=array("shuvo","lisa","sourov");
            //short array
            sort($shuvo);
            
           $length=count($shuvo);
            for($i=0;$i<$length;$i++){
                
                echo $shuvo[$i] . "<br>";   
            }
            
            ?>
            <br>
            
           <hr>
           <br> 
            
            
       <?php
            echo "Array reverse sorting:<br>";
            $shuvo=array("shuvo","lisa","sourov");
            //short array
            rsort($shuvo);
            
           $length=count($shuvo);
            for($i=0;$i<$length;$i++){
                
                echo $shuvo[$i] . "<br>";   
            }
            
            ?>
            
            <br>
            
           <hr>
           <br> 
            
            
       <?php
            echo "Array  sorting by value:<br>";
            $shuvo=array("shuvo" => 30,"lisa" => 21,"sourov" => 11);
            //short array
            asort($shuvo);
            
           
            foreach($shuvo as $shuvo => $num){
                
                echo "array key =" . $shuvo . "  value=" . $num . "<br>";   
            }
            
            ?>
            
              <br>
            
           <hr>
           <br> 
       
       
       <?php 
           $t= array(
        array("shuvo" => 30,"lisa" => 21,"sourov" => 11),
          array("shuvo" => 301,"lisa" => 211,"sourov" => 111),
           array("shuvo" => 302,"lisa" => 212,"sourov" => 112),
            );
            
          for($i=0;$i<2;$i++){ 
                
           
              foreach($t[$i] as $t[$i]=>$s ) { 
                echo $s . "<br>";} 
                  
            }
            ?>
            
            
            
        </div>
       <div style="background-color:<?php echo "black";?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>