   <?php
    require __DIR__ . '/data.php';
    ?>
   
   <?php
   /* kollar om det finns en team-parameter i URL */
    if (isset($_GET['team'])) {

        $teamName = $_GET['team'];
    } else {
        header('Location: index.php');
        exit;
    }
    ?>
   <?php
    /* kollar om namnet finns som key i array*/
    if (!array_key_exists($teamName, $teams)) {
        header('Location: index.php');
        exit;
    }
    ?>

   <?php
    require __DIR__ . '/header.php';
    ?>

   <article>
       <ul>

           <?php $team = $teams[$teamName]; ?>

           <h1><?php echo $teamName; ?></h1>


           <li><?php echo "League: " . ($team['league']) ?></li>
           <li><?php echo "Ranking: " . ($team['uefa-coefficient-ranking']) ?></li>
           <li><?php echo "Position: " . ($team['league-position']) ?> </li>
           <li><?php echo "City: " . ($team['city']) ?> </li>
           <li><a href="<?php echo ($team['url']) ?>">Website</a></li>
           <img src="<?php echo $team['logo_uefa']; ?>" alt="<?php echo $teamName; ?> logo">
       </ul>
   </article>