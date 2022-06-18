<div class="content-right">
<h2 style="color: #47242e;">Recent Media</h2>
<div id="gallery" style="display:none;">

<?php
require_once 'lib/config.php';

$dbase = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$dbase) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM gallery ORDER BY id DESC LIMIT 4";

$queryResult = mysqli_query($dbase, $query);

//exit(json_encode($result));

if ($queryResult) {

  

  while($row = mysqli_fetch_array($queryResult)) {
	  $url = $row['url'];
      $id = $row['id'];
      $type = $row['type'];

      if($type == "image"){

        print "<a href='#'>
        <img alt='Discord Upload: $id'
             src='$url'
             data-image='$url'
             data-description='$id'
             style='display:none'>
      </a>";
        }else if($type == "video"){
          print "
          <img alt='$id' data-type='youtube' src='https://i.ytimg.com/vi/$url/mqdefault.jpg' data-image='https://i.ytimg.com/vi/$url/sddefault.jpg' data-description='$id' data-videoid='$url' style='display:none'>
          ";
        }else{
          print "<a href='#'>
          <img alt='Discord Upload: $id'
               src='$url'
               data-image='$url'
               data-description='$id'
               style='display:none'>
        </a>";
        }

  }

}

?>

	</div>

    <script>
jQuery(document).ready(function(){
		
        jQuery("#gallery").unitegallery({


            gallery_width:"100%",
            gallery_min_width: 336,			
			gallery_images_preload_type:"all",
      tile_width: 210,
            tile_height: 150,
	tile_border_color:"#e4e4e499",
            
        });
    });
        </script>
</div>




