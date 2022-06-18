<div class="content-right">
<script type="text/javascript">
   $(document).ready(function(){
    $("#onlineUsers").load("online/inline.php?reg=<?php echo $_GET['content']; ?>");
   });
</script>

<?php

$reg = $_GET['content'];

if($reg == "116") {
print "<h2 style='color: #47242e;'>Online from the 116th</h2>";
}elseif ($reg == "69"){
    print "<h2 style='color: #47242e;'>Online from the 69th</h2>";
}elseif ($reg == "72"){
    print "<h2 style='color: #47242e;'>Online from the 72nd</h2>";
}else{
  print "<h2 style='color: #47242e;'>Online people</h2>";
}
?>


<div id="right-test" class="content-right-desc">
  <div id="onlineUsers">Loading...</div>
</div>


