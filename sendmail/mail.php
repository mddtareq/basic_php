<?php
include('mailFunction.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" href="">
</head>

<body class="container ">
    <h1 class="text-center pt-5">Send Mail</h1>
    <br>
    <form action="mail.php" method="POST">
        <div class="row m-5">
            <div class="col-md-12 text-center text-success pb-4 h5"><?php sendMail(); ?></div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <input class="form-control" type="email" name="email" placeholder="Enter your mail" required>
                <br>
                <input class="form-control" type="text" name="subject" placeholder="Enter mail Subject" required>
                <br>
                <textarea class="form-control" name="content" id="content" rows="6" maxlength="10" placeholder="Enter your mail (250 words)" required></textarea>
                <br>
                <input class="btn btn-primary form-control" name="submit" type="submit">
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>
    <script>
        document.getElementById("content").addEventListener("keypress", function(evt) {
            var words = this.value.split(/\s+/);
            var numWords = words.length; 
            var maxWords = 250;
            if (numWords > maxWords) {
                evt.preventDefault(); // Cancel event
            }
        });
    </script>
</body>

</html>