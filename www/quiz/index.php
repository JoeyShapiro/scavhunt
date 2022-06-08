<?php
    include_once("../header.php");

    $answer = "";

    // if the question is answered
    if(isset($_POST['answered']) && isset($_POST['answer'])){ //check if form was submitted
        $answer = intval($_POST['answer']); //get input text

        // insert answer into db
        $stmt = $conn->prepare("INSERT INTO answers (`group`, question_id, ag) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $_SESSION['group_name'], $_SESSION['cur_q'], $answer);
        $stmt->execute();
    }

    // when the enxt question should be loaded
    if (isset($_POST['next'])) {
        $_SESSION['cur_q']++;
    }

    // if the quiz is done
    if ($_SESSION['cur_q'] > NUMBER_OF_Q) {
        header("Location: " . BASE_URL . "complete.php");
        exit();
    }

    // when the user has a new question, or needs to retry
    $stmt = $conn->prepare("SELECT * FROM questions WHERE id=?");
    $stmt->bind_param("i", $_SESSION['cur_q']);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows[] = $result->fetch_array(); // store answers in sep array, forloop it
    $row = $rows[0];
    $choices = [ $row['a1'], $row['a2'], $row['a3'], $row['a4'] ];
    // foreach ($rows as $key => $row) {
    //     echo $row['id'] . "," . $row['Question'] . "," . $row['a1'] . "," . $row['a2'] . "," . $row['a3'] . "," . $row['a4'] . "," . $row['ac'];
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz</title>
        
            <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="../styles/bootstrap-5.0.2-dist/css/bootstrap.min.css">
            <!-- Custom -->
        <link rel="stylesheet" href="../styles/quiz.css">
    </head>

    <body class="bg-dark justify-content-center fw-normal mb-3">
        <main class="text-light">
        <h1 class="p-2 text0-align-center">Scavenger Hunt Quiz</h1>

        <div class="p-2">
            <form action="" method="POST">
                <h3><?php echo $_SESSION['cur_q'] . ". " . $row['Question'] ?></h3>
                <div>
                    <input class="form-check-input" type="radio" name="answer" id="a1" value="1">
                        <label class="form-check-label" for="a1"><?php echo $row['a1'] ?></label><br> <!-- add tag -->
                    <input class="form-check-input" type="radio" name="answer" id="a2" value="2">
                        <label class="form-check-label" for="a2"><?php echo $row['a2'] ?></label><br>

                    <?php if ($row['a3'] != "") : ?> <!-- when this row contains any data -->
                        <input class="form-check-input" type="radio" name="answer" id="a3" value="3">
                            <label class="form-check-label" for="a3"><?php echo $row['a3'] ?></label><br>
                    <?php endif; ?>
                    
                    <?php if ($row['a4'] != "") : ?> <!-- when this row contains any data -->
                        <input class="form-check-input" type="radio" name="answer" id="a4" value="4">
                            <label class="form-check-label" for="a4"><?php echo $row['a4'] ?></label><br>
                    <?php endif; ?>
                </div>
                
                <?php if (!isset($_POST['answered']) || !isset($_POST['answer'])) : ?> <!-- clean -->
                    <button class="w-100 btn btn-sm btn-primary" type="submit" name="answered">Submit</button>
                <?php endif; ?>
            </form>
        </div>

        <!-- if the question was answered -->
        <?php if (isset($_POST['answered']) && isset($_POST['answer'])) : ?>
            <!-- if the answer was correct -->
            <?php if ($_POST['answer'] == $row['ac']) : ?>
                <h1><?php echo "Answer: " . $choices[intval($row['ac'])-1]; ?></h1>
                <form action="" method="POST">
                    <button class="w-100 btn btn-sm btn-primary" type="submit" name="next">Next Question</button>
                </form>
            <!-- if the answer was incorrect -->
            <?php else : ?>
                <h1><?php echo "The answer you put was incorrect"; ?></h1>
                <form action="" method="POST">
                    <button class="w-100 btn btn-sm btn-primary" type="submit" name="retry">Retry Question</button>
                </form>
            <?php endif; ?>
        <?php endif; ?>
        </main>
    </body>
</html>