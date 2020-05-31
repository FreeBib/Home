<?php require_once('Views/Components/Header.php'); ?>
<main style="width: 600px; max-width: 95%;">
    <div class="codeblock">
        <div class="codeblock-info">
            <p>Code Sample</p>
        </div>
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
