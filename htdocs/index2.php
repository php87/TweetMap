
<form action="index2.php" method="submit">
<input name="twitterq" type="text" id="twitterq" />
<input name="Search" type="submit" value="Search" />
</form>



<?php 
include('Srprac.php');
if($_GET['twitterq']){
$twitter_query = $_GET['twitterq'];
$search = new TwitterSearch($twitter_query);
$results = $search->results();

foreach($results as $result){
echo '<div class="twitter_status">';
echo '<img src="'.$result->profile_image_url.'" class="twitter_image">';
$text_n = toLink($result->text);
echo $text_n;
echo '<div class="twitter_small">';
echo '<strong>From:</strong> <a href="http://www.twitter.com/'.$result->from_user.'">'.$result->from_user.'</a>: ';
echo '<strong>at:</strong> '.$result->created_at;
echo '</div>';
echo '</div>';
}
}
?>