<?php require_once('Views/Components/Header.php'); ?>
<main>
    <?php

    foreach ($db->query('SELECT * FROM CodeSamples') as $codeSample) {
        echo "<a href='/CodeSample.php?id=$codeSample[0]'>$codeSample[1]</a><br />";
    }

    ?>
</main>
<?php require_once('Views/Components/Footer.php'); ?>
