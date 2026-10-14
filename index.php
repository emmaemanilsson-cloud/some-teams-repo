<?php
require __DIR__ . '/header.php';
?>

<?php
require __DIR__ . '/data.php';
?>
<main>
    <div class="profile-heading">
        <h3>TEAMS OF UEFA WOMENS LEAGUE</h3>

        <div class="teams-container">


            <?php foreach ($teams as $key => $value) : ?>

                <?php
                //Remove the country from the league name by splitting at the opening parenthesis.
                $country = explode('(', $value['league'])[1];
                //Removes the closing parenthesis from the country name.
                $country = str_replace(')', '', $country);
                ?>

                <div class="team-card">

                    <a class="team-link" href="<?php echo 'team.php?team=' . $key ?>">
                        <img src="<?php echo $value['logo_uefa']; ?>"
                            alt="<?php echo $key; ?> logo">
                    </a>

                    <h2><?php echo $key ?></h2>
                    <p><?php echo $country; ?></p>
                    <p><?php echo $value['city'] ?></p>



                </div>
            <?php endforeach; ?>
        </div>

</main>
</body>

</html>