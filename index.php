<?php
$interval = $_GET["interval"];
//  Create picture array 
$pics_list = glob("photowall/*");
//  Calculate length
$length_list = count($pics_list);
// Get random image
$random_nr = mt_rand(0, $length_list-1);
$image = $pics_list[$random_nr];
$img_nr = $random_nr;
$shortname =  str_replace("photowall/","",$image);
// Shortest $interval = 5 seconds. Default is 10
if (isset($interval)) {
        if ($interval < 5) {
                echo "<html><head><title>Error</title>";
                echo "<meta http-equiv=\"refresh\" content=\"5;URL='index.php?interval=5'\">";
                echo "</head><body bgcolor=\"black\" text=\"red\">";
                echo "<font size=\"1\" face=\"arial\">Interval value too small! Refreshing in 5 seconds..</font></body>";
                exit;
        }
        ?> <meta http-equiv="refresh" content="<?php echo $interval; ?>;URL='index.php?interval=<?php echo $interval; ?>'"> <?php
} else {
        $interval = 10;
        echo "<meta http-equiv=\"refresh\" content=\"10;URL='index.php?interval=$interval'\">";
}
?>
<html>
<head>
<style>
{
  padding: 0;
  margin: 0;
}
.fit {
  object-fit: contain;
  max-width: 99%;
  max-height: 99%;
  min-width: 100%;
  min-height: 100%;
}
.center {
  display: block;
  margin: auto;
}
.FadeInEnUit {
    background: black;
    -webkit-animation: fadeinout <?php echo $interval; ?>s cubic-bezier(0.70,0,0.90,0);
       -webkit-background-size: contain;
       -moz-background-size: contain;
       -o-background-size: contain;
        background-size: contain;
        display: center;
        margin: auto;
        background-color: black;
    animation: fadeinout <?php echo $interval; ?>s cubic-bezier(0.70,0,0.90,0);
    opacity: 0;
}
@-webkit-keyframes fadeinout {
  15% { opacity: 1; }
}
@keyframes fadeinout {
  15% { opacity: 1; }
}
</style>
<script src="jquery.min.js"></script>
<script type="text/javascript" language="JavaScript">
function set_body_height()
{
    var wh = $(window).height();
    $('body').attr('style', 'height:' + wh + 'px;');
}
$(document).ready(function() {
    set_body_height();
    $(window).bind('resize', function() { set_body_height(); });
});
</script>
<title>Pi-Photowall</title>
</head>
<body bgcolor="black" text="white" class="FadeInEnUit">
<script src="jquery.min.js"></script>
<!-- Remove the FadeInEnUit style below, if your raspberry-pi gets too hot during usage! (flashing temp meter icon)... :-) -->  
<img id="the_pic" class="center fit FadeInEnUit" src="<?php echo $image; ?>" border="0" style="image-orientation:from-image;">
</body>
</html>
