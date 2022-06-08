<?php
    include_once("../header.php");
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed</title>

        <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../styles/bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <!-- Custom -->
    <link rel="stylesheet" href="../styles/quiz.css">
</head>
<body class="bg-dark justify-content-center fw-normal mb-3">
    <main class="text-light">
        <h1>YOU ARE DONE</h1>
    
        <h2>Your Clue Is:</h2>
        <!-- if first pi -->
        <?php if (gethostname() == "GenCyber1") : ?>
            <h3 class="text-info"><?php echo "Kyasskx" ?></h3>
        <?php endif; ?>
        <!-- if second pi -->
        <?php if (gethostname() == "GenCyber2") : ?>
            <h3 class="text-info"><?php echo "Eigsv" ?></h3>
        <?php endif; ?>
        <!-- if third pi -->
        <?php if (gethostname() == "GenCyber3") : ?>
            <h3 class="text-info"><?php echo "Yrkzy" ?></h3>
        <?php endif; ?>
        <!-- if forth pi -->
        <?php if (gethostname() == "GenCyber4") : ?>
            <h3 class="text-info"><?php echo "Sngbk" ?></h3>
        <?php endif; ?>
        <!-- if fifth pi -->
        <?php if (gethostname() == "GenCyber5") : ?>
            <h3 class="text-info"><?php echo "Iyavkx" ?></h3>
        <?php endif; ?>
        <!-- if sixth pi -->
        <?php if (gethostname() == "GenCyber6") : ?>
            <h3 class="text-info"><?php echo "Xlat" ?></h3>
        <?php endif; ?>
    </main>
</body>
</html>