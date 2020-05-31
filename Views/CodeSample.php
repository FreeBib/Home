<?php require_once('Views/Components/Header.php'); ?>
<main>
    <?php foreach ($db->query('SELECT code FROM CodeExamples') as $code_sample) { echo "<pre class=\"code\">$code_sample[0];</pre>"; } ?>
</main>
<?php require_once('Views/Components/Footer.php'); ?>
