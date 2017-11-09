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
        <h2 style="font-size:38px;text-align:center">Supper global varriable $_SERVER</h2>
      
        
               <br>
               <hr>
               <br> 
            
        <?php
       // echo "'SERVER_NAME' : " . $_SERVER['SERVER_NAME'] . "<br>" ;
        //echo "'SERVER_ADDR' : " . $_SERVER['SERVER_ADDR'] . "<br>" ;
       // echo "'PHP_SELF' : " . $_SERVER['PHP_SELF'] . "<br>" ;
       // echo "'GATEWAY_INTERFACE' : " . $_SERVER['GATEWAY_INTERFACE'] . "<br>" ;
      ///  echo "'SERVER_SOFTWARE' : " . $_SERVER['SERVER_SOFTWARE'] . "<br>" ;
       // echo "'SERVER_PROTOCOL' : " . $_SERVER['SERVER_PROTOCOL'] . "<br>" ;
       // echo "'SERVER_ADMIN' : " . $_SERVER['SERVER_ADMIN'] . "<br>" ;
       // echo $_SERVER['SERVER_NAME'];
          
            
    $server_va = array('PHP_SELF', 
'argv', 
'argc', 
'GATEWAY_INTERFACE', 
'SERVER_ADDR', 
'SERVER_NAME', 
'SERVER_SOFTWARE', 
'SERVER_PROTOCOL', 
'REQUEST_METHOD', 
'REQUEST_TIME', 
'REQUEST_TIME_FLOAT', 
'QUERY_STRING', 
'DOCUMENT_ROOT', 
'HTTP_ACCEPT', 
'HTTP_ACCEPT_CHARSET', 
'HTTP_ACCEPT_ENCODING', 
'HTTP_ACCEPT_LANGUAGE', 
'HTTP_CONNECTION', 
'HTTP_HOST', 
'HTTP_REFERER', 
'HTTP_USER_AGENT', 
'HTTPS', 
'REMOTE_ADDR', 
'REMOTE_HOST', 
'REMOTE_PORT', 
'REMOTE_USER', 
'REDIRECT_REMOTE_USER', 
'SCRIPT_FILENAME', 
'SERVER_ADMIN', 
'SERVER_PORT', 
'SERVER_SIGNATURE', 
'PATH_TRANSLATED', 
'SCRIPT_NAME', 
'REQUEST_URI', 
'PHP_AUTH_DIGEST', 
'PHP_AUTH_USER', 
'PHP_AUTH_PW', 
'AUTH_TYPE', 
'PATH_INFO', 
'ORIG_PATH_INFO') ;        
            
   echo "<ul>";
            echo "Here is the _SERVER Manuals <br>";
    foreach($server_va as $v){
        if (isset($_SERVER[$v])) { 
        
        echo "<li>" . $v . " : " . $_SERVER[$v] . "</li>";
        
        
    }   
    else{
        
        echo "<li>not Found</li>";
        
    }    
    }        
         echo "</ul>";  
            
            
              var_dump(isset($server_va[1]));  
            ?>
     
        
        </div>
       <div style="background-color:<?php echo "black";?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>