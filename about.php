<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= ""; $title="Vi|About"; $page="about"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p><b>user@localhost~:$</b> $page = <?php echo $page ?>.php</p>
        <div>
	        <b>user@localhost~:$</b> About our project.
	        <p>
		        	This tutorial site was created for a group project in ISTE-240. This group was made up of:<br/>
					Dale Moore – Project Leader/Programmer<br/>
					Sierra Skorupski – Information Design/Programmer<br/>
					Ryan Lowrie – Interaction Design<br/>
					Klahr Clark – Information Design/Content<br/>
					Nakeia Barlow – Artist/Content <br/>
	        </p>
          <p>
            We went above with our search function and making a certificate for the user after they complete the text. We differed from our design document in a few ways. We changed the navigation so that the glossary, resources, and test of skills are on the global navigation instead of the advanced group local navigation. We added landing pages for both the intermediate and advanced group. We also added in more advanced commands in the advanced section for users.
          </p>
        </div>
    </div>
  </main>
  <?php include "assets/inc/footer.php" ?>
</body>

</html>