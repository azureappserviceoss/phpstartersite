    <?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
     ?>


    <div id="main">
    <h3>...Get started with your website...</h3>

    <ol class="round">
        <li class="one">
            <h5>1.Login as admin </h5>
           The site admin username and password are stored in the config file in the Includes directory. 
        </li>
        <li class="two">
            <h5>2.Customize your site</h5>
             After you login, you can add, delete, and modify web pages.
         </li>
        <li class="asterisk">
            <div class="visit">
                To learn more about PHP, visit <a href="http://php.net" title="PHP.net Website">http://php.net</a>. 
            </div>
         </li>
    </ol>


    </div>

</div> <!-- End of outer-wrapper which opens in header.pho -->

<?php 
    include ("Includes/footer.php");
 ?>