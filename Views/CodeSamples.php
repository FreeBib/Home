<?php require_once('Views/Components/Header.php'); ?>
<main>
    <?php

    foreach ($db->query('SELECT * FROM CodeExamples') as $codeExample) {
        echo "<a href='/CodeSample.php?id=$codeExample[0]'>$codeExample[1]</a><br />";
    }

    ?>
</main>
<?php require_once('Views/Components/Footer.php'); ?>
