<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>
    <div class="site-wrapper_1">
    <h2 class="overskrift_intra"> <?php the_title("") ?></h2>
    <div class="container_1">
    
    <img class="image" src="<?php the_field("image") ?>" alt="">
    <p class="tekst"><?php the_field("din_dag") ?></p> 
</div>
    <div class="container_1">
   
    <img class="image" src="<?php the_field("image_2") ?>" alt="">
    <p class="tekst"><?php the_field("skema") ?></p> 
    </div>
    </div>
    <h3 class="tekst"><?php the_field("skema_9b") ?></h3> 
  
   <?php the_content("skema_")?>

   <?php function ex_demo() {
        ?>
        <p>skema</p>
        <?php
    }
    add_action('action_scheduler/migration_hook', 'ex_demo') 
    ?> 

    <h3 class="tekst"><?php the_field("skema_9b_copy") ?></h3> 
    <?php the_content("skema_copy")?>
    <script type="text/javascript">  
function msg(){  
 alert("Skemaer ikke tilgængelig endnu");  
}  
</script>  


<form>  
<input type="button" value="Se fremtidige skemaer" onclick="msg()"/>  
</form>  
  
</div>
    <?php endwhile ?>

<?php get_footer() ?>


