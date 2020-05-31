<?php

$uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>FreeBib.org</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Questrial&family=Source+Code+Pro&display=swap">
    <link rel="stylesheet" href="res/css/main.css">

    <!-- Preloaded Javascript -->
    <script src="res/js/main.js"></script>
</head>
<body>
    <main>
        <p>Welcome to FreeBib.org!</p>
        <p>The goal of this site is to help make intermediate- to advanced-level information in Mathematics and Computer Science accessible to anyone, regardless of whether they can afford it. I myself could not have made it to where I am today without the support of countless individuals, many of whom do not even know about the profundity of the impact they had on me. As far as they know, they gave a random person some advice one day, and probably never thought about it again. This website was born out of the desire to continue that chain of altruistic pedagogy, and I make all of the information on this site completely free for your edification, whoever you are.</p>
        <?php
        echo "<pre class=\"code\">";
foreach ($db->query('SELECT * FROM CodeExamples') as $example) {
    echo $example[2];
}
echo "</pre>";

        ?>
    </main>

    <footer style="text-align: center;">
        <a href="/code-examples.php">Code Examples</a>
        <br />
        <p id="request-uri"><?= $uri ?></p>
    </footer>
</body>
</html>

