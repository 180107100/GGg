

<header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
        <h1><a href="index.php">Business with Mary Kay</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
        <ul class="clear">

            <?php if(isset($_SESSION["admin"])):  ?>
                <li ><a href="<?php uri(); ?>main">Home</a></li>
                <li ><a href="<?php uri(); ?>products">Gallery of products</a></li>
                <li ><a href="<?php uri(); ?>orders">Orders</a></li>
            <?php else: ?>
                <li><a class="drop" href="#">All about MK</a>
                    <ul>
                        <li><a href="<?php uri(); ?>products">Gallery of products</a></li>
                        <li><a href="#">Special offers</a></li>
                    </ul>
                </li>
                <li><a class="drop" href="#">Rating</a>
                    <ul>
                        <li><a href="#">TOP-10</a></li>
                        <li><a class="drop" href="#">Queens</a>
                            <ul>
                                <li><a href="#">Queens of sales</a></li>
                                <li><a href="#">Queens of attraction</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a href="#contact">Contact-us</a></li>

            <?php endif; ?>

        </ul>
    </nav>
    <!-- ################################################################################################ -->
</header>