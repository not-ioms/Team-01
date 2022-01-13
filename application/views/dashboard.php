<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="hero">
        <nav>
            <img src="<?php echo base_url();?>assets/images/logo.png" class="logo">
            <ul>
                <li><a href="#">Join Quiz</a></li>
                <li><a href="#">Quiz List</a></li>
                <li><a href="#">Study Tips</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="<?php echo base_url('welcome/LogoutController');?>">LOGOUT</a></li>
            </ul>
        </nav>
        <div class="detel">
            <h1>hello neighbor<span> QUIZZERS!</span></h1>
            <p>No matter how busy you may think you are, you must find time for reading, <br> or surrender yourself to self-chosen ignorance. </p>
            <a href="#">Create Quiz</a>
        </div>
        <div class="images">
            <img src="<?php echo base_url();?>assets/images/shape.png" class="shape">
            <img src="<?php echo base_url();?>assets/images/quizz.png" class="girl">
        </div>

    </div>
</body>
</html>