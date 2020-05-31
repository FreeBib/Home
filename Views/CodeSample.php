<?php

require_once('Views/Components/Header.php');

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<p style='color: red; text-style: bold;'>Example not found.</p>";
} else {

?>
<main>
    <div class="codeblock" style="width: 950px; max-width: 95%;">
        <div class="codeblock-info">
            <p>Code Sample</p>
        </div>
        <div class="code">
            <table>
                <tbody>
                    <?php

                    $line_number = 0;
        
                    foreach ($db->query('SELECT code FROM CodeExamples') as $code_sample) {
                        $line = strtok($code_sample[0], "\n");

                        while ($line) {
                            printf("<tr class=\"line\">");
                            printf("<td class=\"line-numbers\">%d</td>", ++$line_number);
                            printf("<td class=\"line-content\">%s</td>", $line);
                            printf("</tr>");

                            $line = strtok("\n");
                        }

                        break;
                    }
        
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php

}

require_once('Views/Components/Footer.php'); ?>
