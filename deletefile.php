<html>
<p><b> DATA FILE ERASED - Do Not Blame the Monkey! V1.0<br></b></p>
<body>
<?php
$myFile = "./data.txt";
unlink($myFile);
$url = './index.html'; // or $url = $lang[0];
$link = '<a href="'.$url.'" target="_blank">Back</a>';
echo $link;
?>
</body>
<footer>
<p>&copy; Hurleyware LLC 2013<br><a href="http://www.hurleyware.com">Hurleyware.com</a></p>
</footer>
</html>
