<hr class="hide" />
   
<div id="sidebar">    
<?php if(function_exists('dynamic_sidebar')) {
    /* Wordpress Widgets Support */
    if(is_home()) {
        dynamic_sidebar("Home Page");
    }
    if(is_single() || is_page()) {
        dynamic_sidebar("Post Page");
    }
    dynamic_sidebar("Global Sidebar");

} ?>
      
    <div class="box">
        <div class="box-inner">
            <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        </div>
    </div>

    <div class="box">
        <div class="box-inner">
            <?php /*<script type="text/javascript" src="http://embed.technorati.com/embed/4pbr3k9w4x.js"></script>*/ ?>
        </div>
    </div>

</div> <!-- end #sidebar -->