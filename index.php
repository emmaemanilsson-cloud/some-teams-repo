<?php
require __DIR__ . '/header.php';
?>

<?php
require __DIR__ . '/data.php';
?>


<ul>

    <?php foreach ($teams as $key => $value) : ?>


        <h1> <?php echo $key ?> </h1>

        <li><?php echo "League: " . ($value['league']) ?></li>
        <li><?php echo "Ranking: " . ($value['uefa-coefficient-ranking']) ?></li>
        <li><?php echo "Position: " . ($value['league-position']) ?> </li>
        <li><?php echo "City: " . ($value['city']) ?> </li>
        <li><a href="<?php echo ($value['url']) ?>">Website</a></li>
        <li><img src="<?php echo $value['logo_uefa']; ?>" alt="<?php echo $key; ?> logo"></li>


    <?php endforeach; ?>
</ul>

</body>

</html>