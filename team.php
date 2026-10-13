   <?php
    require __DIR__ . '/data.php';
    ?>

   <?php
    /* kollar om det finns en team-parameter i URL */
    if (isset($_GET['team'])) {

        $teamName = $_GET['team'];
        /* om inte - skicka tillbaka till index */
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

       <div class="team-profile">
           <div class="profile-heading">
               <h2>TEAM PROFILE</h2>

               <?php $team = $teams[$teamName]; ?>

               <h1><?php echo $teamName; ?></h1>
               <?php echo "City: " . ($team['city']) ?>
           </div>

           <div class="profile-card">
               <div class="profile-info">
                   <?php echo "League: " . ($team['league']) ?>
                   <?php echo "Ranking: " . ($team['uefa-coefficient-ranking']) ?>
                   <?php echo "Position: " . ($team['league-position']) ?>
                   <a href="<?php echo ($team['url']) ?>">Website</a>
               </div>
           </div>

           <div class="profile-logo">
               <img src="<?php echo $team['logo_uefa']; ?>" alt="<?php echo $teamName; ?> logo">
           </div>
       </div>
   </article>