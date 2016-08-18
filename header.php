<?php
  function createMenu($directory){
    echo "<ul>";
    echo "<script>console.log(\"called\")</script>";
    echo "<script>console.log(\"$directory\")</script>";

    for($i=0; $i<=10; $i++) {
      echo "<script>console.log($i)</script>";
      foreach(glob($directory."/page_*") as $file){
        $name = basename($file, ".php");
        $name = str_replace("page_", "", $name);


        $order = "NOT_SET";
        ob_start();
        if(is_dir($file)){
          include("$file/order.php");
        }else{
          include($file);
        }
        ob_end_clean();

        if((is_string($order) && $i == 10) || (!is_string($order) && $order == $i)){
          echo "<script>console.log(\"adding: $file order: $order\")</script>";
          $root = str_replace("header.php", "", __FILE__);
          $filePath = str_replace($root, "", $file);

          if(is_dir($file)){
            echo "<li><a>$name</a>";
            echo "<script>console.log(\"$file\")</script>";
            createMenu($file);
          }else if($pagename == $name){
            echo "<li class=\"active\"><a href=\"$filePath\">$name</a>";
          }else{
            echo "<li><a href=\"$filePath\">$name</a>";
          }
        }
        echo "</li>";
      }
    }
    echo "</ul>";
  }
?>
    <header>
        <a href="/"><img src="/img/fist.svg"></a>
        <div>
            <h2><a href="/">Vae Victis</a></h2>
            <h3><a href="/">FRC Team 1418 - George Mason High School</a></h3>
        </div>
        <ul class="social">
            <li>
                <a href="mailto:robotics1418ATSYMBOLgmailPERIODcom">
                    <img src="/img/social/email.svg">
                </a>
            </li>
            <li>
                <a href="http://facebook.com/robotics1418">
                    <img src="/img/social/facebook.svg">
                </a>
            </li>
            <li>
                <a href="http://github.com/frc1418">
                    <img src="/img/social/github.svg">
                </a>
            </li>
            <li>
                <a href="http://twitter.com/Robotics1418">
                    <img src="/img/social/twitter.svg">
                </a>
            </li>
        </ul>
        <div id="nav-button"><span></span><span></span><span></span></div>
        <nav>
          <?php createMenu(str_replace("header.php", "", __FILE__)); ?>
        </nav>
    </header>
