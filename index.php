<?php
    if ($_POST['address'] != "") { 
        $mySearchAddress = $_POST['address'].', '.$_POST['postcode'].', '.$_POST['city'];
    }
?>
<bkml title="BkRender for Google Maps">
    <header>
        <h1 icon="apple-touch-icon.png" 
            background-color="#6D83A1" 
            border-bottom-color="#E95C00" 
            border-top-color="#E95C00" 
            background-image="bg.png" 
            text-align="left"> 
            <span color="#FFF"><b>Where do your want to go?</b></span>
        </h1>
    </header>
    <section id="scroller">
        <object data="Googlemaps2.tmpl">
            <param name="start_address" value="" />
            <param name="end_address" value="<?php echo $mySearchAddress ?>" />
        </object>

        <?php if ( (isset($mySearchAddress)) && ( $mySearchAddress != "") ) {
            echo "<object data=\"Googletravel2.tmpl\" />";
        }
        ?>

        <form action="index.php" method="post" submit-text="Search"> 
            <label>Address</label> 
            <label><input name="address" value="<?php if( (isset($_POST['address'])) && ($_POST['address'] != "") ) {echo $_POST['address'];} ?>" type="text"/></label>
            <label>Post Code</label> 
            <label><input name="postcode" value="<?php if( (isset($_POST['postcode']))&&($_POST['postcode'] != "") ) {echo $_POST['postcode'];} ?>" type="text"/></label>   
            <label>City</label> 
            <label><input name="city" value="<?php if( (isset($_POST['city']))&&($_POST['city'] != "") ) {echo $_POST['city'];} ?>" type="text"/></label>  
        </form>
    </section>
    <footer>
        <div>
            <?php
                if ($_POST['address'] != "") { 
                    echo "<small>You are going to: ".$mySearchAddress. " Please choose your mode of travel</small>";
                }
            ?>
        </div>
    </footer>
</bkml>