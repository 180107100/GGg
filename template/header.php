<div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="nospace">
        <li><a href="<?php uri(); ?>main"><i class="fa fa-lg fa-home"></i></a></li>
        <?php if(isset($_SESSION["admin"])):  ?>
            <li><a href="<?php uri(); ?>logout" title="Log out"><i class="fa fa-lg fa-sign-out"></i></a></li>

        <?php else: ?>
            <li><a  href="<?php uri(); ?>login" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
        <?php endif; ?>
            <li><a href="<?php uri(); ?>registration" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a></li>
               </ul>
    <!-- ################################################################################################ -->
</div>
