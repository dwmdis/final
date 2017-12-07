<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= ""; $title="Vi|Glossary"; $page="glossary"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p><b>user@localhost~:$</b> $page = <?php echo $page ?>.php</p>
        <p>
	        <b>user@localhost~:$</b> Here are all the commands we have listed in the site:
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

	        	<dt>$</dt>
	        	<dd>Move to end of line</dd>
	        	
	        	<dt>0</dt>
	        	<dd>Move to beginning of line</dd>

	        	<dt>e</dt>
	        	<dd>Move to end of word</dd>       	

	        	<dt>w</dt> 
	        	<dd>Move cursor to the beginning of next word</dd>

	        	<dt>b</dt> 
	        	<dd>Move to beginning of word</dd>

	        	<dt>G</dt> 
	        	<dd>Move to last line in file</dd>

	        	<dt>nG</dt> 
	        	<dd>Move to nth line in file</dd>
				
				<dt>y</dt>	
	        	<dd>Copy</dd>  

	        	<dt>p</dt>  
	        	<dd>Paste</dd> 

	        	<dt>u</dt> 
	        	<dd>undo</dd>

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
  <?php include "assets/inc/footer.php" ?>
</body>

</html>