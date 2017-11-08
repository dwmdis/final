    <?php 
        $linkpath = "http://serenity.ist.rit.edu/~iste240t04/240/final/"
    ?>
    <span id="click-here" onclick="openNav()">Click Here!</span>
    <header>
        <image id="logos">
        <!-- <img id="big-logo" src="http://lorempixel.com/400/200/" alt="big-logo"/>
        <img id="small-logo" src="http://lorempixel.com/100/50/" alt="small-logo" /> -->
        </image>
        <form id="search-box">
            <input type="search" placeholder="Search this site..." />
            <input type="submit" value="Search" class="btn-search"  />
        </form>
    </header>
    <nav id="myMobilenav" class="mobilenav">
            <a id="close-nav" href="#" class="closebtn" onclick="closeNav(); closeSubNav()">&times;</a>
            <div class="sub-navlist">    
                <a onclick="closeSubNav(); getId(this); openSubNav()" id="home-section" <?php if($page == 'home'){  echo 'class="active"';}?> href="#">Home</a>
                <div class="float-container">
                    <a class="subnav1" href="<?= $linkpath ?>index.php">Main Page</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/commandline.php">The Command Line</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/introduction.php">Introduction</a>
                    <a class="subnav1" href="<?= $linkpath ?>beginner/commands.php">Basic Commands</a>
                </div>
            </div><!-- end <div class="sub-navlist"> -->
            <div class="sub-navlist">
                <a onclick="closeSubNav(); getId(this); openSubNav()" id="intermediate-section" <?php if($page == 'intermediate'){  
                echo 'class="active"';}?> href="#">Intermediate</a>
                <div class="float-container">
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/intermediate.php">Intermediate Home</a>
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/modal.php">Modal Editing</a>
                    <a class="subnav2" href="<?= $linkpath ?>intermediate/modes.php">Vi Modes</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <div class="sub-navlist">
                <a onclick="closeSubNav(); getId(this); openSubNav()" id="advanced-section" <?php if($page == 'advanced'){ 
                echo 'class="active"';}?> href="#">Advanced</a>
                <div class="float-container">
                    <a class="subnav3" href="<?= $linkpath ?>advanced/advanced.php">Advanced Home</a>
                    <a class="subnav3" href="<?= $linkpath ?>advanced/plugins.php">Plugins</a>
                    <a class="subnav3" href="<?= $linkpath ?>advanced/review.php">Command Refresher</a>
                </div>
            </div><!-- END <div class="sub-navlist> -->
            <a <?php if($page == 'test'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>test.php">Test of Skill</a>
            <a <?php if($page == 'glossary'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>glossary.php">Glossary</a>
            <a <?php if($page == 'resources'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>resources.php">Resources</a>
            <a <?php if($page == 'about'){ 
                echo 'class="active"';}?> href="<?= $linkpath ?>about.php">About</a>
    </nav>
    <nav id="myDesktopNav" class="desktopNav">
      <ul id="desktop">
        <li>Home</li>
        <li>Beginner</li>
        <li>Intermediate</li>
        <li>Advanced</li>
      </ul>
    </nav>