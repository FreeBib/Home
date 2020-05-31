<?php require_once('Views/Components/Header.php'); ?>
<main>
    <div class="codeblock" style="width: 600px; max-width: 95%;">
        <div class="codeblock-info">
            <p>Code Sample</p>
        </div>
        <div class="code">
            <table>
                <tbody>
                    <?php

                    $line_number = 0;
        
                    foreach ($db->query('SELECT code FROM CodeExamples') as $code_sample) {
                        $line = strtok($code_sample[0], " \n\t");

                        while ($line) {
                            printf("<tr>");
                            printf("<td>%d</td>", ++$line_number);
                            printf("<td>%s</td>", $line);
                            printf("</tr>");

                            $line = strtok(" \n\t");
                        }

                        break;
                    }
        
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php require_once('Views/Components/Footer.php'); ?>
