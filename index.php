<?php get_header(); ?>



    <div class="container">
        <div class="top-level" >
            <h2>We are launching <span>soon!</span></h2>
            <p>Subscribe and get notified</p>

        </div>

        <div class="mailClass">
            <input placeholder="example@example.com" type="email" id="email" name="email"> 
            <a class="button" href="#">Notify Me</a>
       
        </div>

        <div class="img_container">
            <img src="<?php echo get_template_directory_uri()?>/img/dashboard.png" alt="" />
        </div>
        
    </div>

   
 


<?php get_footer(); ?>