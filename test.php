<!DOCTYPE html>
<html lang="en">
<?php 
    //Sets variables
    $relpath= ""; $title="Vi|Test of Skill"; $page="test"; $imgpath="http://serenity.ist.rit.edu/~iste240t04/240/final/assets/media/images/";
?>
<?php include "assets/inc/head.php" ?>
<!-- <head> went here -->
<body>
<?php include "assets/inc/navigation.php" ?>
  <main>
    <div class="content" id="home"><h1>VIable</h1>
        <p>page = "<?php echo $page ?>"</p>
        <p>
	        <b>user@localhost~:$</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	        Morbi cursus ultrices nibh a porta. 
	        Aenean rhoncus dolor est, sit amet auctor sem ullamcorper eget. 
	        Nulla egestas mi mauris, ut malesuada mi ultrices sit amet. 
	        Sed posuere consectetur sapien non dignissim. 
	        Vestibulum dictum purus et nisl varius, ac aliquet metus laoreet. 
	        Ut porttitor semper ultricies. 
	        Pellentesque aliquet elit sit amet rutrum finibus. 
	        Integer ornare libero sit amet accumsan auctor. 
	        Vestibulum placerat elit lorem, nec dictum eros molestie at. 
	        Suspendisse quis eros metus. Sed dictum vitae risus non posuere. 
	        Quisque ultricies arcu eu luctus dignissim. 
	        Morbi et fringilla nunc. Duis interdum vestibulum nulla et ullamcorper.
	        Sed ullamcorper molestie ornare.
        </p>
        
        <form method="post" action="project2quizform.html" id="quizform">
        <p>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/></span>
            <label for="ans1">
                <input type="radio" name="q1ans" id="ans1"/>Lorem&emsp;
            </label>
            <label for="ans2">
                <input type="radio" name="q1ans" id="ans2"/>Ipsum&emsp;
            </label>
            <label for="ans3">
                <input type="radio" name="q1ans" id="ans3"/>Loremipsum&emsp;
            </label>
            <label for="ans4">
                <input type="radio" name="q1ans" id="ans4"/>Lor&emsp;
            </label>
        </p>
        
        <p>
            <span>Aenean ullamcorper augue a arcu finibus, ut euismod mi porttitor. Aliquam sit:<br/></span>
            <label for="ans1">
                <input type="radio" name="q2ans" id="ans1"/>Lorem&emsp;
            </label>
            <label for="ans2">
                <input type="radio" name="q2ans" id="ans2"/>Ipsum&emsp;
            </label>
            <label for="ans3">
                <input type="radio" name="q2ans" id="ans3"/>Loremipsum&emsp;
            </label>
            <label for="ans4">
                <input type="radio" name="q2ans" id="ans4"/>Lor&emsp;
            </label>
        </p>
        
        <p>
            <span>Aenean ullamcorper augue finibus, ut euismod mi porttitor sit:<br/></span>
            <label for="ans1">
                <input type="radio" name="q3ans" id="ans1"/>Lorem&emsp;
            </label>
            <label for="ans2">
                <input type="radio" name="q3ans" id="ans2"/>Ipsum&emsp;
            </label>
            <label for="ans3">
                <input type="radio" name="q3ans" id="ans3"/>Loremipsum&emsp;
            </label>
            <label for="ans4">
                <input type="radio" name="q3ans" id="ans4"/>Lor&emsp;
            </label>
        </p>
        
        <p>
            <span>Ullamcorper augue a arcu finibus, ut euismod mi porttitor. Aliquam sit:<br/></span>
            <label for="ans1">
                <input type="radio" name="q4ans" id="ans1"/>Lorem&emsp;
            </label>
            <label for="ans2">
                <input type="radio" name="q4ans" id="ans2"/>Ipsum&emsp;
            </label>
            <label for="ans3">
                <input type="radio" name="q4ans" id="ans3"/>Loremipsum&emsp;
            </label>
            <label for="ans4">
                <input type="radio" name="q4ans" id="ans4"/>Lor&emsp;
            </label>
        </p>
        
        <p>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ullamcorper augue a arcu finibus, ut sit:<br/></span>
            <label for="ans1">
                <input type="radio" name="q5ans" id="ans1"/>Lorem&emsp;
            </label>
            <label for="ans2">
                <input type="radio" name="q5ans" id="ans2"/>Ipsum&emsp;
            </label>
            <label for="ans3">
                <input type="radio" name="q5ans" id="ans3"/>Loremipsum&emsp;
            </label>
            <label for="ans4">
                <input type="radio" name="q5ans" id="ans4"/>Lor&emsp;
            </label>
        </p>
        
        <p>
            <span>Consectetur adipiscing elit. Aenean ullamcorper augue a arcu finibus, ut euismod mi porttitor. Aliquam sit:<br/></span>
            <label for="ans1">
                <input type="radio" name="q6ans" id="ans1"/>Lorem&emsp;
            </label>
            <label for="ans2">
                <input type="radio" name="q6ans" id="ans2"/>Ipsum&emsp;
            </label>
            <label for="ans3">
                <input type="radio" name="q6ans" id="ans3"/>Loremipsum&emsp;
            </label>
            <label for="ans4">
                <input type="radio" name="q6ans" id="ans4"/>Lor&emsp;
            </label>
        </p>
        
        <p>
            <input type="submit" value="Submit Quiz" id="btn submit"/>
        </p>
    
    </form>
    </div>
  </main>
  <?php include "assets/inc/footer.php" ?>
</body>

</html>