<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youth Empowerment Consortium</title>
    <!-- include boostrap css style -->
    <link href="vendors/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="resources/css/img/logo.jpeg">
</head>
<body>
    <?php
include_once('header.php');
include_once('mailer.php');
    ?>
    <section class="contact_page_section">
<div class="contact_bg_header">
    <h1 class="text-uppercase text-center">Contact us</h1>
</div>
    <div class="container">
<div class="contact_info">
    <div class="col-sm-6">
<p>please do not hesitate to reach us. We are ever ready to hear from you</p>
<div class="phone text-center">
<i class="fas fa-phone"></i>
    <p>+233207633555</p>
</div>
<div class="mail text-center">
<i class="fas fa-envelope"></i>
    <p>companyName@gmail.com</p>
</div>
<div class="location text-center">
<i class="fas fa-map-marker-alt"></i>
    <p>26 Nii Osae Ntiful Avenue, Base Camp Initiatives, East Legon. Accra-Ghana</p>
</div>
    </div>
    <div class="col-sm-6 contact_form_sec">
        <?php
if(isset($error_msg)){
    echo "<div class='alert alert-danger'>".$error_msg."</div>";
}
        ?>
                <?php
if(isset($success_msg)){
    echo "<div class='alert alert-info'>".$success_msg."</div>";
}
        ?>
        <form action="contact.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" require>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" require>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" require>
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Message" name="message" id="message" cols="30" rows="8" require></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Send" class="">
            </div>
        </form>
    </div>
</div>
    </div>
    </section>
    <section class="section_7">
<div>
<h2 class="text-uppercase text-center">locate us</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3970.4102158284672!2d-0.14783828573542626!3d5.65364893423284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sgh!4v1626893412986!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    </div>
    </section>
    <?php
include_once("footer.php");
?>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://kit.fontawesome.com/011545c454.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendors/js/bootstrap.min.js"></script>
</body>
</html>