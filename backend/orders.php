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

            <h3 class="heading">Gallery of orders</h3>

        </article>
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <h1><a href="index.php">Gallery of products</a></h1>
    </div>
    <div class="container">
        <div class="row">
            <?php
            foreach($orders as $get):?>
                echo '<div class="col-3" style="margin:10px;">
                    <form  method="POST">
                        <div class="group team text-lg-center">
                            <figure class=" first  border border-secondary rounded" >
                                <p class="text-dark mt-1" style="font-size: 15px"><?php echo $get["name"]; ?></p>
                                <figcaption class="bg-secondary text-light p-2">
                                    <h4 class="heading text-light" style="color:black;"><?php echo $get["title"]; ?></h4>
                                    <em style="color:white; font-size: 15px">Cost:<?php echo $get["count"]; ?> тг.</em>
                                    <footer>
                                        <i class="fas-fa-edit"></i>
                                        <i class="fas-fa-delete"></i>
                                    </footer>
                                </figcaption>
                            </figure>
                        </div>
                    </form></div>';

            <?php endforeach; ?>

        </div>

    </div>
</div>
</div>
<?php include_once(DIRNAME.'view/template/footer.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

</body>
<?php include_once(DIRNAME.'view/template/scripts.php'); ?>

</html>