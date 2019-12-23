<!DOCTYPE html>
<html>
<head>
    <title>Main page</title>

    <?php include_once(DIRNAME.'view/template/external.php'); ?>

</head>
<body id="top">



<div class="bgded overlay light" style="background-image:url('https://www.marykay.ua/-/media/images/mk/europe/ukraine/esuite/toolkits/05-18/founders-section/734109-mary-kay-founder-animated-hero.gif?h=529&w=945&la=ru-UA&hash=89779E97CA33BED3567576A2DF816FC85F945945');">
    <div class="wrapper row0">
        <?php include_once(DIRNAME.'view/template/header.php'); ?>
    </div>
    <div class="wrapper row1">
        <?php include_once(DIRNAME.'view/template/sidenav.php'); ?>
    </div>
    <div id="pageintro" class="hoc clear">
        <!-- ################################################################################################ -->
        <article>

            <h3 class="heading">Book a Product</h3>

        </article>
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<div class="wrapper row0">
    <div class="container">
        <div class="col-md-12 text-dark">
            <form method="POST">
                <center><h2 style="color: black;">Booking form</h2></center>
                <input type="text" name="name" placeholder="Your name..." required="" class="form-control"><br>
                <input type="email" name="email" placeholder="Your email..." required="" class="form-control"><br>
                <input type="text" name="phone" placeholder="Your phone..." required="" class="form-control"><br>
                <input type="number" name="count" placeholder="Number of products..." required="" class="form-control"><br>
                <input type="text" name="comments" placeholder="Your comments..." required="" class="form-control"><br>
                <input type="text" name="title" placeholder="Your comments..." value="<?php echo $title;?>" required="" class="form-control"><br>
                <input type="text" name="product_id" value="<?php echo $id;?>" style="display: none;"><br>
                <button type="submit" class="btn btn-outline-secondary" name="order_add" value="Order">Book</button>
            </form>
        </div>
    </div>
</div>
<?php include_once(DIRNAME.'view/template/footer.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

</body>
<?php include_once(DIRNAME.'view/template/scripts.php'); ?>

</html>
