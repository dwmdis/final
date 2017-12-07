    <?php 
        $linkpath = "http://serenity.ist.rit.edu/~iste240t04/240/final/"
    ?>
    <header>
        <span id="click-here" onclick="openNav()">Click Here!</span>
    </header>
    <nav id="myMobilenav" class="mobilenav">
            <a id="close-nav" href="#" class="closebtn" onclick="closeNav(); closeSubNav()">&times;</a>
            <div class="sub-navlist">    
                <a onclick="getId(this); openOrClose();" id="home-section" <?php if($page == 'home'){  echo 'class="active"';}?> href="#">Home</a>
                <div class="float-container">
                    <a class="subnav1" href="<?= $linkpath ?>index.php">Main Page</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/introduction.php">Introduction</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/commandline.php">The Command Line</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/commands.php">Basic Commands</a>
                </div>
            </div><!-- end <div class="sub-navlist"> -->
            <div class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="intermediate-section" <?php if($page == 'intermediate'){  echo 'class="active"';}?> href="#">Intermediate</a>
                <div class="float-container">
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/intermediate.php">Intermediate Home</a>
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/modal.php">Intermediate Commands</a>
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/modes.php">Vi Modes</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <div class="sub-navlist">
                <a onclick="getId(this); openOrClose();" id="advanced-section" <?php if($page == 'advanced'){ 
                echo 'class="active"';}?> href="#">Advanced</a>
                <div class="float-container">
                    <a class="subnav3" href="<?= $linkpath ?>advanced/advanced.php">Advanced Home</a>
                    <a class="subnav3" href="<?= $linkpath ?>advanced/plugins.php">Plugins</a>
                    <a class="subnav3" href="<?= $linkpath ?>advanced/review.php">Command Refresher</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <p><a <?php if($page == 'test'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>test.php">Test of Skill</a></p>
            <p><a <?php if($page == 'glossary'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>glossary.php">Glossary</a></p>
            <p><a <?php if($page == 'resources'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>resources.php">Resources</a></p>
            <p><a <?php if($page == 'about'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>about.php">About</a></p>
    </nav>
    <nav id="dropbar">
	  <ul>
	    <li><a href="<?= $linkpath ?>" <?php if($page == 'home'){ echo 'class="active"';} ?>>Home</a></li>
          <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Beginner <span <?php if($page == 'introduction' || $page == 'commands' || $page == 'command-line'){ echo 'class="active2"';} ?>>&#9660;</span></a>
	      <div class="dropdown-content" id="beginner">
            <a href="<?= $linkpath ?>beginner/introduction.php" <?php if($page == 'introduction'){ echo 'class="active"';} ?>>Introduction</a>
            <a href="<?= $linkpath ?>beginner/commandline.php" <?php if($page == 'command-line'){ echo 'class="active"';} ?>>The Command Line</a>
            <a href="<?= $linkpath ?>beginner/commands.php" <?php if($page == 'commands'){ echo 'class="active"';} ?>>Basic Commands</a>
	      </div>
	    </li>
          <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Intermediate <span <?php if($page == 'intermediate' || $page == 'modal' || $page == 'modes'){ echo 'class="active2"';} ?>>&#9660;</span></a>
	      <div class="dropdown-content" id="intermediate">
	        <a href="<?= $linkpath ?>intermediate/intermediate.php" <?php if($page == 'intermediate'){ echo 'class="active"';} ?>>Intermediate Home</a>
            <a href="<?= $linkpath ?>intermediate/modal.php" <?php if($page == 'modal'){ echo 'class="active"';} ?>>Intermediate Commands</a>
            <a href="<?= $linkpath ?>intermediate/modes.php" <?php if($page == 'modes'){ echo 'class="active"';} ?>>Vi Modes</a>
	      </div>
	    </li>
          <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Advanced <span <?php if($page == 'advanced' || $page == 'plugins' || $page == 'review'){ echo 'class="active2"';} ?>>&#9660;</span></a>
	      <div class="dropdown-content" id="advanced">
	        <a href="<?= $linkpath ?>advanced/advanced.php" <?php if($page == 'advanced'){ echo 'class="active"';} ?>>Advanced Home</a>
            <a href="<?= $linkpath ?>advanced/plugins.php" <?php if($page == 'plugins'){ echo 'class="active"';} ?>>Plugins</a>
            <a href="<?= $linkpath ?>advanced/review.php" <?php if($page == 'review'){ echo 'class="active"';} ?>>Command Refresher</a>
	      </div>
	    </li>
          <li class="dropdown"><a <?php if($page == 'test'){ echo 'class="active"';} ?> href="<?= $linkpath ?>test.php">Test of Skill</a></li>
          <li class="dropdown"><a <?php if($page == 'glossary'){ echo 'class="active"';} ?> href="<?= $linkpath ?>glossary.php">Glossary</a></li>
          <li class="dropdown"><a <?php if($page == 'resources'){ echo 'class="active"';} ?> href="<?= $linkpath ?>resources.php">Resources</a></li>
          <li class="dropdown"><a <?php if($page == 'about'){ echo 'class="active"';} ?> href="<?= $linkpath ?>about.php">About</a></li>
          
        <div id="searchbox" method="post">
        <script src="<?= $relpath?>assets/scripts/search2.js"></script>
        <input type="text" placeholder="Search this site.." id="searchb" name="search_input" onkeydown ="if(event.keyCode == 13) document.getElementById('searchbutton').click();"/>
        <input type="button" value="Search" id="searchbutton" class="btn-search" onclick="search();"/>
        </div>
        </ul>
        <!-- search modal stuff -->
        <div id="searchModal" class="modal">
            <!-- Modal content -->
            <div class="smodal-content" id="smodalContent"></div>
        </div>
        <script></script>
        <!-- end of search modal stuff -->
  </nav>