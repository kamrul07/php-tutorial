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
        <h2 style="font-size:38px;text-align:center">Supper global varriable $_POST</h2>
      
        
               <br>
               <hr>
               <br> 
            <?php
            $name = $email = $phone = $message ="";
            $n = $e = $p = $m ="";
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                
                $n=$_POST['name'];
                $e=$_POST['email'];
                $p=$_POST['phone'];
                $m=$_POST['message'];
            
             if(empty($n)){
                 $n = "<span style='color:red'> Fill The field</span>";   
                 } else {
                 
                 $n = " Your name is " . $n;
             }  
              if(empty($e)){
                 $e = "<span style='color:red'> Fill The field Correctly</span>";   
                 } elseif (!filter_var($e,FILTER_VALIDATE_EMAIL)){
                  
                   $e="not_valid";
              }
                
                else {
                 
                 $e = " Your Email is " . $e;
             }  
             if(empty($m)){
                 $m = "<span style='color:red'> GIve us message</span>";   
                 } elseif (strlen($m)>20){
                  
                   $m="Maximum 20 words";
              }
                
                else {
                 
                 $m = "Your Message " . $m;
             }   
             
            
  
                
            }
            ?>   
               
        <form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
           Username: <input type="text" name="name"><span><?php echo $n;?></span><br>
          Email: <input type="text" name="email"><span><?php echo $e;?></span><br>
           Phone Number: <input type="text" name="phone"><br>
           Message: <input type="text" name="message"><span><?php echo $m;?></span><br>
      <input type="submit" name="name'">
           
            
        </form>
        
        </div>
       <div style="background-color:<?php echo "black";?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>