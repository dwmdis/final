<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= "../"; $title="Vi|Commands"; $page="commands"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "../assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "../assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p><b>user@localhost~:$</b> $page = beginner/<?php echo $page ?>.php</p>
        <div>
	        <p><b>user@localhost~:$</b> 
                Here are some of the first commands that you sould know for vim:</p>
	        <dl>
	        	<dt>vi <i>filename</i></dt>
	        	<dd>Open the file for editing</dd>

	        	<dt>:w</dt>
	        	<dd>Write to file</dd>

	        	<dt>:e</dt>
	        	<dd>Edit the file</dd>

	        	<dt>:x</dt>
	        	<dd>Exit the file and save changes</dd>

	        	<dt>:q</dt>
	        	<dd>Exit if there were no changes</dd>

	        	<dt>:wq</dt>
	        	<dd>Save changes and quit</dd>

	        	<dt>i</dt>
	        	<dd>Insert before cursor</dd>

	        	<dt>:d</dt>
	        	<dd>Delete current line</dd>

	        	<dt>h</dt>
	        	<dd>Move left</dd>

	        	<dt>j</dt>
	        	<dd>Move down</dd>

	        	<dt>k</dt>
	        	<dd>Move up</dd>

	        	<dt>l</dt>
	        	<dd>Move Right</dd>
	        </dl>
	        <p>You have to be in command mode to enter in commands. If you are in input mode, it will be taken as text. If you are in input mode, press the esc key to switch to command mode. You will learn more about this in the next section.</p>
        </div>
    </div>
  </main>
  <?php include "../assets/inc/footer.php" ?>
</body>

</html>