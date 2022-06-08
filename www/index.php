<?php
    include_once("header.php");

    if (isset($_POST['group']) && $_POST['group'] != "") {
        $stmt = $conn->prepare("SELECT * FROM answers WHERE `group`=?");
        $stmt->bind_param("s", $_POST['group']);
        $stmt->execute();
        $result = $stmt->get_result();
        $rows = $result->fetch_array(); // store answers in sep array, forloop it
        if (empty($rows)) {
            $_SESSION['group_name'] = $_POST['group'];
            header("Location: " . BASE_URL . "/quiz");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>

            <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="styles/bootstrap-5.0.2-dist/css/bootstrap.min.css">
            <!-- Custom -->
        <link rel="stylesheet" href="styles/home.css">

    </head>
    
    <body class="bg-dark">
        <main class="form-signin">
            <form action="" method="post">
                <h1 class="h3 mb-3 fw-normal text-nowrap text-light">Please Enter Group Name</h1>
                <div class="form-floating">
                    <input type="text" name="group" id="group" placeholder="Group Name" class="form-control">
                    <label for="floatingInput">Group Name</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Start Quiz</button>
            </form>
            <?php if (isset($_POST['group'])) : ?>
                <h2 class="text-danger fw-normal mb-3 h3">you must have a UNIQUE group name.</h2>
            <?php endif; ?>
            <!-- <a href="quiz"><button>Start Quiz</button></a> -->
        </main>
    </body>
</html>