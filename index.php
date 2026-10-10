<?php
require __DIR__ . '/header.php';
?>

<?php
require __DIR__ . '/data.php';
?>


<ul>

     <?php foreach ($teams as $key => $value) : ?>
      

        <h1><li> <?php echo $key ?> </li></h1>

        <li><?php echo "League: " . ($value['league']) ?></li>
        <li><?php echo ($value['uefa-coefficient-ranking']) ?></li>
        <li><?php echo ($value['league-position']) ?> </li>
        <li><?php echo ($value['city']) ?> </li>
        <li><a href="<?php echo ($value['url']) ?>">Website</a></li>
        <li><?php echo ($value['logo']) ?> </li>
        <li><?php echo ($value['logo_uefa']) ?> </li>

        <br><br>

    <?php endforeach; ?>
    </ul>

    </body>

    </html>