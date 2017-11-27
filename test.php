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
    <script src="assets/scripts/answer_key.js"></script>
  <main>
      <div class="content" id="home">
        <form method="post" action="test.php" id="quizform">
            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ullamcorper augue a arcu finibus, ut euismod mi porttitor. Aliquam sit:<br/></span>
                <label for="ans1">
                    <input type="radio" value="Answer1" id="q1a1"/>Answer1&emsp;
                </label>
                <label for="ans2">
                    <input type="radio" value="Answer2" id="q1a2"/>Correct Answer&emsp;
                </label>
                <label for="ans3">
                    <input type="radio" value="Answer3" id="q1a3"/>Answer3&emsp;
                </label>
                <label for="ans4">
                    <input type="radio" value="Answer4" id="q1a4"/>Answer4&emsp;
                </label>
            </p>
        
            <p>
                <span>Nunc consectetur bibendum neque, eget ornare dui laoreet id. Vestibulum nec dignissim ante, eget sodales metus. Nullam nec dignissim dui:<br/></span>
                <label for="ans1">
                    <input type="radio" value="Answer1" id="q2a1"/>Correct Answer&emsp;
                </label>
                <label for="ans2">
                    <input type="radio" value="Answer2" id="q2a2"/>Answer2&emsp;
                </label>
                <label for="ans3">
                    <input type="radio" value="Answer3" id="q2a3"/>Answer3&emsp;
                </label>
                <label for="ans4">
                    <input type="radio" value="Answer4" id="q2a4"/>Answer4&emsp;
                </label>
            </p>
        
            <p>
                <span>In elementum eu leo nec bibendum. Morbi vulputate est ac eros ultricies dapibus. Donec dapibus pulvinar tincidunt. Vestibulum eu fermentum risus:<br/></span>
                <label for="ans1">
                    <input type="radio" value="Answer1" id="q3a1"/>Correct Answer&emsp;
                </label>
                <label for="ans2">
                    <input type="radio" value="Answer2" id="q3a2"/>Answer2&emsp;
                </label>
                <label for="ans3">
                    <input type="radio" value="Answer3" id="q3a3"/>Answer3&emsp;
                </label>
                <label for="ans4">
                    <input type="radio" value="Answer4" id="q3a4"/>Answer4&emsp;
                </label>
            </p>
        
            <p>
                <span>Pellentesque pretium enim nibh. Suspendisse nec sodales arcu, quis sagittis justo. Vestibulum sollicitudin sed orci a euismod. Duis non ex ex:<br/></span>
                <label for="ans1">
                    <input type="radio" value="Answer1" id="q4a1"/>Answer1&emsp;
                </label>
                <label for="ans2">
                    <input type="radio" value="Answer2" id="q4a2"/>Answer2&emsp;
                </label>
                <label for="ans3">
                    <input type="radio" value="Answer3" id="q4a3"/>Answer3&emsp;
                </label>
                <label for="ans4">
                    <input type="radio" value="Answer4" id="q4a4"/>Correct Answer&emsp;
                </label>
            </p>
        
            <p>
                <span>Donec sed posuere justo. In semper consequat nisl, quis viverra diam fringilla ut. Orci varius natoque penatibus:<br/></span>
                <label for="ans1">
                    <input type="radio" value="Answer1" id="q5a1"/>Answer1&emsp;
                </label>
                <label for="ans2">
                    <input type="radio" value="Answer2" id="q5a2"/>Correct Answer&emsp;
                </label>
                <label for="ans3">
                    <input type="radio" value="Answer3" id="q5a3"/>Answer3&emsp;
                </label>
                <label for="ans4">
                    <input type="radio" value="Answer4" id="q5a4"/>Answer4&emsp;
                </label>
            </p>
        
            <p>
                <span>Duis cursus feugiat magna, sed porttitor tellus porta dignissim. Nunc urna libero, pellentesque a volutpat non, rutrum id mauris. :<br/></span>
                <label for="ans1">
                    <input type="radio" value="Answer1" id="q6a1"/>Answer1&emsp;
                </label>
                <label for="ans2">
                    <input type="radio" value="Answer2" id="q6a2"/>Answer2&emsp;
                </label>
                <label for="ans3">
                    <input type="radio" value="Answer3" id="q6a3"/>Correct Answer&emsp;
                </label>
                <label for="ans4">
                    <input type="radio" value="Answer4" id="q6a4"/>Answer4&emsp;
                </label>
            </p>
        
            <p>
                <input type="submit" value="Submit Quiz" id="btn submit" onclick="check()"/>
            </p>
    
        </form>
      </div>
  </main>
  <?php include "assets/inc/footer.php" ?>
</body>

</html>