<?php
/**
* Template Name: About Page
*/
get_header('single');
the_post(); 
?>
    <!--post start-->
    <div class="container">
         <div class="row justify-content-md-center">
             <div class="col-md-8">
                 <div class="row justify-content-md-center justify-content-center">
                     <div class="col-md-10 col-10">
                         <div class="about-heading text-center">
                             <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-photo.jpg" alt=""/>
                             <h2>Alicia Silverstone</h2>
                             <div class="designation">Blogger</div>
                             <div class="short-title">
                                 <p>The Grammy-winning singer-songwriter touched down in Egypt this week, where she’s been exploring the country’s architectural and archaeological treasures.</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="about-info text-left">
                     <p>The Grammy-winning singer-songwriter touched down in Egypt this week, where she’s been exploring the country’s architectural and archaeological treasures.
                         The Grammy-winning singer-songwriter touched down in Egypt this week, where she’s been exploring the country’s architectural and archaeological treasures. Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean shorts fixie consequat flexitarian four loko.</p>
                     <div class="text-center">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/about-signature.jpg" alt=""/>
                     </div>
                     <div class="about-social-links text-center">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-google-plus"></i></a>
                     </div>
                 </div>
             </div>
         </div>
    </div>
    <!--post end-->

<?php get_footer(); ?>