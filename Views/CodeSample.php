<?php require_once('Views/Components/Header.php'); ?>
<main>
    <?php foreach($db->query('SELECT code FROM CodeExamples') as $code_sample) { echo $code_sample; } ?>
</main>
<?php require_once('Views/Components/Footer.php'); ?>
