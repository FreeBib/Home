<?php

require_once('Views/Components/Header.php');

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<p style='color: red; text-style: bold;'>Example not found.</p>";
} else {
    $statement = $db->prepare('SELECT * FROM CodeSamples WHERE id=:id');
    $statement->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $statement->execute();
    $code_sample = $statement->fetch();
    $statement->closeCursor();
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

                    $line = strtok($code_sample[0], "\n");

                    while ($line) {
                        printf("<tr class=\"line\">");
                        printf("<td class=\"line-numbers\">%d</td>", ++$line_number);
                        printf("<td class=\"line-content\">%s</td>", $line);
                        printf("</tr>");

                        $line = strtok("\n");
                    }

                    // $line_number = 0;
        
                    // foreach ($db->query('SELECT code FROM CodeExamples') as $code_sample) {
                    //     $line = strtok($code_sample[0], "\n");

                    //     while ($line) {
                    //         printf("<tr class=\"line\">");
                    //         printf("<td class=\"line-numbers\">%d</td>", ++$line_number);
                    //         printf("<td class=\"line-content\">%s</td>", $line);
                    //         printf("</tr>");

                    //         $line = strtok("\n");
                    //     }

                    //     break;
                    // }
        
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php

}

require_once('Views/Components/Footer.php'); ?>
