<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= "../"; $title="Vi|Refresher"; $page="review"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "../assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "../assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p><b>user@localhost~:$</b> $page = advanced/<?php echo $page ?>.php</p>
        <p>
	        <b>user@localhost~:$</b>Here are some more advanced commands to review:
	        <dl>
	        	<dt>n</dt>
	        	<dd>Repeate last search</dd>
	        	
	        	<dt>N</dt>
	        	<dd>Reverse last search</dd>

	        	<dt>^r</dt>
	        	<dd>Refresh screen</dd>

	        	<dt>^l</dt>
	        	<dd>Redraw screen</dd>

	        	<dt>/<i>string</i></dt>
	        	<dd>Search forward for <i>string</i></dd>

	        	<dt>?<i>string</i></dt>
	        	<dd>Search backwards for <i>string</i></dd>

	        	<dt>:y</dt>
	        	<dd>Yank the current line</dd>

	        	<dt>mc</dt>
	        	<dd>Set marker c on this line</dd>

	        	<dt>`c</dt>
	        	<dd>Go to the beginning of marker c line</dd>

	        	<dt>'c</dt>
	        	<dd>Go to the first non-blank character of marker c</dd>
	        	
	        </dl>

        </p>
    </div>
  </main>
  <?php include "../assets/inc/footer.php" ?>
</body>

</html>
  </main>
</body>

</html>