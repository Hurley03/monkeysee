<html>
<p><b>SUCCESS - Monkey Saw and Did V1.0<br></b></p>
<body>
<?php
if(isset($_POST['submit'])){
$usercomments = $_POST['comment'];
echo "   ";
//echo $usercomments;
file_put_contents('./data.txt', $_POST['comment'], FILE_APPEND);
$url = './data.txt'; // or $url = $lang[0];
$link = '<a href="'.$url.'" target="_blank">View Output Results</a><br>';
echo $link;
$url2 = './index.html'; // or $url2 = $lang[0];
$link2 = '<a href="'.$url2.'" target="_blank">Back</a>';
echo $link2;
}

?>
</body>
<footer>
<p>&copy; Hurleyware LLC 2013<br><a href="http://www.hurleyware.com">Hurleyware.com</a></p>
</footer>
</html>
