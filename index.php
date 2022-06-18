
    <?php 
    include("php_inc/header.php"); 


    if(!isset($_GET['content'])){
      include("html_inc/main.html");
    }elseif(isset($_GET['content']) && $_GET['content'] == "gallery"){
      include("php_inc/gallery.php" );
    }else{
      include("html_inc/". $_GET['content'] . ".html" );
    }

    include("lib/getright.php"); 
 
    include("php_inc/footer.php"); 

   ?>