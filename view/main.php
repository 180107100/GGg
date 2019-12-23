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
            <?php if(isset($_SESSION["admin"])):  ?>
                <?php $get = Admin::getAdmin($_SESSION["admin"]); ?>

                <p><?php echo $get["email"]; ?></p>
                <h3 class="heading"><?php echo $get["name"]; ?></h3>
                <footer>
                    <ul class="nospace inline pushright">
                        <li><a class="btn" href="#">Beauty consultants</a></li>
                        <li><a class="btn inverse" href="#">Leaders</a></li>
                    </ul>
                </footer>
            <?php else: ?>

            <p>Offer cosmetics and enter to the</p>
            <h3 class="heading">Mary Kay World</h3>
            <?php endif; ?>



        </article>
        <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading">Company Profile</h6>
            <p>Business Description, History, Background Information on Mary Kay, Inc.</p>
        </div>
        <article class="group">
            <div class="one_half first">
                <h6 class="heading">Our vision: To provide women with an unparalleled opportunity for financial independence, career and personal fulfillment.</h6>
                <p>Company Perspectives: To achieve total customer satisfaction by delivering the products and services that enhance a woman's self-image and confidence. The principles we live by: Integrity and the Golden Rule must guide every business decision.</p>
                <p class="btmspace-30">nthusiasm encourages a positive attitude and provides inspiration as we work together to achieve our goals. Quality in our products and services must be a priority in order for us to deliver value and satisfaction to our customers. Service should be prompt and proactive to provide convenience with a personal touch. Praise motivates everyone to reach their full potential. Leadership among our sales force and employ&hellip;</p>
                <footer><a class="btn" href="#">Read More &raquo;</a></footer>
            </div>
            <div class="one_half"><a class="imgover" href="#"><img src="https://www.beautyheaven.com.au/sites/default/files/products/395431-S54-GB-128-716GelSemiMatteLip-white-cmyk-bh.jpg" alt=""></a></div>
        </article>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded overlay" style="background-image:url('https://static1.squarespace.com/static/59d45bb08419c263977ae1d8/t/59d7e1ac2278e744bbb38508/1507320238403/422815-dwyl-wallpaper-desktop-2560x1440-kisses+12.59.11+PM.jpg?format=2500w');">
    <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading">More informations</h6>
        </div>
        <ul class="nospace group services">
            <li class="one_quarter"><i class="fa fa-4x fa-expeditedssl btmspace-30"></i>
                <h6 class="heading font-x1">About the site</h6>
                <ul class="nospace">
                    <li><i class="fa fa-link"></i> <a href="#">Account privacy</a></li>
                    <li><i class="fa fa-link"></i> <a href="#">Site policy</a></li>
                    <li><i class="fa fa-link"></i> <a href="#">Copyright</a></li>
                </ul>
            </li>
            <li class="one_quarter"><i class="fa fa-4x fa-hourglass-2 btmspace-30"></i>
                <h6 class="heading font-x1">Details</h6>
                <ul class="nospace">
                    <li><i class="fa fa-link"></i> <a href="#">News</a></li>
                    <li><i class="fa fa-link"></i> <a href="#">Trainings</a></li>
                    <li><i class="fa fa-link"></i> <a href="#">First steps to success</a></li>
                    <li><i class="fa fa-link"></i> <a href="#">Motivational programs</a></li>
                </ul>
            </li>
        </ul>
        <footer class="center"><a class="btn" href="#">INC.&raquo;</a></footer>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <figure class="hoc container clear clients">
        <!-- ################################################################################################ -->
        <ul class="nospace group">
            <li class="one_quarter first"><a class="imgover" href="#"><img src="https://cf.shopee.ph/file/ed598e0c55823822c73400442e27946a" alt=""></a></li>
            <li class="one_quarter"><a class="imgover" href="#"><img src="https://u.makeup.com.ua/b/bl/black-20161206115010.jpg" alt=""></a></li>
            <li class="one_quarter"><a class="imgover" href="#"><img src="https://www.cosmo.com.ua/upload/image/481310-marykay-gb-btc-csr-sm-posts9_(1).jpg" alt=""></a></li>
            <li class="one_quarter"><a class="imgover" href="#"><img src="http://gortenzija.com/wp-content/uploads/2015/04/Mary-Kay.jpg" alt=""></a></li>
        </ul>
        <!-- ################################################################################################ -->
    </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded overlay" style="background-image:url('https://wallpaperplay.com/walls/full/4/9/d/39609.jpg');">
    <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading">National Business Group Leaders</h6>
            <p>Here you can contact with successful people and get detail informations about Mary Kay</p>
        </div>
        <div class="group team">
            <figure class="one_quarter first"><a class="imgover" href="#"><img src="https://www.marykay.kz/-/media/images/mk/europe/kazakhstan/esuite/beauty-consultant/success-stories/nsd/berezhko_tatyana.jpg?h=284&w=225&la=ru-KZ&hash=36B087C19BF765F1D2E916AAFEF2348112C5FD0F" alt=""></a>
                <figcaption>
                    <h6 class="heading">Tatyana Berezhko</h6>
                    <em>NSD</em>
                    <footer>
                        <ul class="faico clear">
                            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </footer>
                </figcaption>
            </figure>
            <figure class="one_quarter"><a class="imgover" href="#"><img src="_MG_7076.JPG" alt=""></a>
                <figcaption>
                    <h6 class="heading">Saimaganbetova Toikul</h6>
                    <em>Leading Business Group Leader</em>
                    <footer>
                        <ul class="faico clear">
                            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </footer>
                </figcaption>
            </figure>
            <figure class="one_quarter"><a class="imgover" href="#"><img src="https://herfancylife.files.wordpress.com/2015/12/gloria-mayfield-banks-sm.jpg" alt=""></a>
                <figcaption>
                    <h6 class="heading">Gloria Mayfield</h6>
                    <em>Elite Leading National Leader</em>
                    <footer>
                        <ul class="faico clear">
                            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </footer>
                </figcaption>
            </figure>
        </div>
        <footer class="center"><a class="btn" href="#">Others &raquo;</a></footer>
    </section>

</div>
<?php include_once(DIRNAME.'view/template/footer.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

</body>
	<?php include_once(DIRNAME.'view/template/scripts.php'); ?>
	
</html>