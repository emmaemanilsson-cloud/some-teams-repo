<?php
require __DIR__ . '/header.php';
?>

<?php
require __DIR__ . '/data.php';
?>

    <div class="teams-container">


        <?php foreach ($teams as $key => $value) : ?>

             <?php
                $country = explode('(', $value['league'])[1];
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


</body>

</html>