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
               <h3>TEAM PROFILE</h3>

               <?php $team = $teams[$teamName]; ?>
               <?php
                $country = explode('(', $team['league'])[1];
                $country = str_replace(')', '', $country);
                ?>

               <h1><?php echo $teamName; ?></h1>
               <p class="team-city"><?php echo $team['city'] . ' - ' . $country; ?></p>
           </div>

           <div class="profile-card">
               <div class="profile-logo">
                   <img src="<?php echo $team['logo_uefa']; ?>" alt="<?php echo $teamName; ?> logo">
               </div>
               <div class="profile-info">
                    <?php $league = trim(explode('(', $team['league'])[0]); ?>
                   <p><?php echo "League: " . $league ?></p>
                   <p><?php echo "UEFA ranking: " . ($team['uefa-coefficient-ranking']) ?></p>
                   <p><?php echo "League position: " . ($team['league-position']) ?></p>
                   <a href="<?php echo ($team['url']) ?>">Visit official website</a>
               </div>
           </div>


       </div>
   </article>