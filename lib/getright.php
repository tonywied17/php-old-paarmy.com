<?php

if( isset($_GET['content']) && $_GET['content'] == "main" || $_GET['content'] == "gallery" || $_GET['content'] == "events" ){

include("php_inc/schedule-right.php"); 

}elseif( !isset($_GET['content']) ){

include("php_inc/schedule-right.php"); 

}elseif( isset ( $_GET['content'] ) && $_GET['content'] == "schedule" || $_GET['content'] == "orders" ){
        
include("php_inc/gallery-right.php"); 
      
}elseif( isset ( $_GET['content'] ) && $_GET['content'] == "marksmanship" ){
        
  include("php_inc/scores-right.php"); 

}elseif( isset ( $_GET['content'] ) && $_GET['content'] == "116" ){

  include("php_inc/online-right.php"); 

}elseif( isset ( $_GET['content'] ) && $_GET['content'] == "69" ){

  include("php_inc/online-right.php"); 

}elseif( isset ( $_GET['content'] ) && $_GET['content'] == "72" ){

  include("php_inc/online-right.php"); 

}else{
  include("php_inc/gallery-right.php"); 
}

?>