<?php require_once('Views/Components/Header.php'); ?>
<main>
    <div class="code-block">
        <div class="code">
        <?php
        
        foreach ($db->query('SELECT code FROM CodeExamples') as $code_sample) {
            // echo "<pre class=\"code\">$code_sample[0]</pre>";
            echo $code_sample[0];
        }
        
        ?>
        </div>
    </div>
</main>
<?php require_once('Views/Components/Footer.php'); ?>
