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
    <div class="codeblock">
        <div class="codeblock-info">
            <p><?= $code_sample[1] ?></p>
        </div>
        <div class="code">
            <table>
                <tbody>
                    <?php

                    $line_number = 0;
                    $lines = preg_split("/\n{1}/", $code_sample[4]);

                    foreach ($lines as $line) {
                        printf("<tr class=\"line\">");
                        printf("<td class=\"line-numbers\">%d</td>", ++$line_number);
                        printf("<td class=\"line-content\">%s</td>", $line);
                        printf("</tr>");
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
