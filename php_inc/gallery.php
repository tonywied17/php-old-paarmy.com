<div class="content-left">

    <h2>The Gallery at Pennsylvania</h2>
    <div id="gallery" style="display:none;">



<?php
require_once 'lib/config.php';

$dbase = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$dbase) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM gallery ORDER BY id DESC";

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

    <a href="#">
			<img alt="Pib Found You""
				 src="assets/pibfoundyou.png"
				 data-image="assets/pibfoundyou.png"
				 data-description="Pib Found You"
				 style="display:none">
		</a>

    <a href="#">
        <img alt="Pibtorian Guard - Keepers of Peace" src="assets/gallery/18.jpg" data-image="assets/gallery/18.jpg" data-description="Pibtorian Guard - Keepers of Peace" style="display:none">
    </a>
    <a href="#">
        <img alt="The Hunt" src="assets/gallery/15.jpg" data-image="assets/gallery/15.jpg" data-description="The Hunt" style="display:none">
    </a>

    <img alt="PA Airborne" data-type="youtube" src="https://i.ytimg.com/vi/15OA9f4kvpM/mqdefault.jpg" data-image="https://i.ytimg.com/vi/15OA9f4kvpM/sddefault.jpg" data-description="PA Airborne" data-videoid="15OA9f4kvpM" style="display:none">

    <a href="#">
        <img alt="Jeff says hello" src="assets/gallery/14.jpg" data-image="assets/gallery/14.jpg" data-description="Jeff says hello" style="display:none">
    </a>

    <img alt="Pib can fly" data-type="youtube" src="https://i.ytimg.com/vi/w_F4F7q0Gko/mqdefault.jpg" data-image="https://i.ytimg.com/vi/w_F4F7q0Gko/sddefault.jpg" data-description="Pib can fly" data-videoid="w_F4F7q0Gko" style="display:none">

    <a href="#">
        <img alt="Simple trigonometry" src="assets/gallery/13.jpg" data-image="assets/gallery/13.jpg" data-description="Simple trigonometry" style="display:none">
    </a>

    <img alt="Rebel learns to fly" data-type="youtube" src="https://i.ytimg.com/vi/GDDCiaTiyos/mqdefault.jpg" data-image="https://i.ytimg.com/vi/GDDCiaTiyos/sddefault.jpg" data-description="Rebel learns to fly" data-videoid="GDDCiaTiyos" style="display:none">

    <a href="#">
        <img alt="Death from above" src="assets/gallery/12.jpg" data-image="assets/gallery/12.jpg" data-description="Death from above" style="display:none">
    </a>

    <img alt="Molex destroys line" data-type="youtube" src="https://i.ytimg.com/vi/8wQRgL4pN3U/mqdefault.jpg" data-image="https://i.ytimg.com/vi/8wQRgL4pN3U/sddefault.jpg" data-description="Molex destroys line" data-videoid="8wQRgL4pN3U" style="display:none">

    <a href="#">
        <img alt="11" src="assets/gallery/11.jpg" data-image="assets/gallery/11.jpg" data-description="11" style="display:none">
    </a>

    <a href="#">
        <img alt="art." src="assets/gallery/10.jpg" data-image="assets/gallery/10.jpg" data-description="art." style="display:none">
    </a>

    <a href="#">
        <img alt="Moving out" src="assets/gallery/9.jpg" data-image="assets/gallery/9.jpg" data-description="Moving out" style="display:none">
    </a>


    <img alt="milk dance" data-type="youtube" src="https://i.ytimg.com/vi/6aMVnZlabdo/mqdefault.jpg" data-image="https://i.ytimg.com/vi/6aMVnZlabdo/sddefault.jpg" data-description="The Milk Dance" data-videoid="6aMVnZlabdo" style="display:none">

    <img alt="flying officer" data-type="youtube" src="https://i.ytimg.com/vi/Rb7eGqbQOrU/mqdefault.jpg" data-image="https://i.ytimg.com/vi/Rb7eGqbQOrU/sddefault.jpg" data-description="flying officer" data-videoid="Rb7eGqbQOrU" style="display:none">

    <img alt="Thanks for the cannister" data-type="youtube" src="https://i.ytimg.com/vi/qHYVXteD7W0/mqdefault.jpg" data-image="https://i.ytimg.com/vi/qHYVXteD7W0/sddefault.jpg" data-description="Using their cannister against them" data-videoid="qHYVXteD7W0"
        style="display:none">

    <a href="#">
        <img alt="We want you to join the pa army" src="assets/gallery/1.jpg" data-image="assets/gallery/1.jpg" data-description="We want you to join the pa army" style="display:none">
    </a>

    <a href="#">
        <img alt="" src="assets/gallery/2.jpg" data-image="assets/gallery/2.jpg" data-description="" style="display:none">
    </a>

    <a href="#">
        <img alt="" src="assets/gallery/3.jpg" data-image="assets/gallery/3.jpg" data-description="" style="display:none">
    </a>

    <a href="#">
        <img alt="4" src="assets/gallery/4.jpg" data-image="assets/gallery/4.jpg" data-description="4" style="display:none">
    </a>

    <a href="#">
        <img alt="5" src="assets/gallery/5.jpg" data-image="assets/gallery/5.jpg" data-description="5" style="display:none">
    </a>

    <a href="#">
        <img alt="6" src="assets/gallery/6.jpg" data-image="assets/gallery/6.jpg" data-description="6" style="display:none">
    </a>

    <a href="#">
        <img alt="7" src="assets/gallery/7.jpg" data-image="assets/gallery/7.jpg" data-description="7" style="display:none">
    </a>

    <img alt="Pep Kisses" data-type="youtube" src="https://i.ytimg.com/vi/moCKZWTNPsk/mqdefault.jpg" data-image="https://i.ytimg.com/vi/moCKZWTNPsk/sddefault.jpg" data-description="PA loves you" data-videoid="moCKZWTNPsk" style="display:none">


</div>

<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery("#gallery").unitegallery({
            tile_width: 210,
            tile_height: 160,
            gallery_images_preload_type:"all",
            tile_border_color:"#e4e4e499",
        });

    });
</script>


</div>