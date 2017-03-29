<?php get_template_part('header'); ?>
    
    <?php if( get_field('sections') ): ?>
         
        <div class="slideshow cycle-slideshow" data-cycle-slides="div.slide">
            <?php while ( has_sub_field('sections') ) : ?>
                <?php if( get_row_layout() == 'slideshow' ): ?>
                    <?php if(have_rows('slides')): ?>
                        <?php while ( have_rows('slides') ) : the_row(); ?>
                            <?php $imgurl = wp_get_attachment_image_src(get_sub_field('image'), 'slideshow'); ?>
                            <div class="slide" style="background-image:url('<?php echo $imgurl[0]; ?>');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 slide-text-bg calloutBox">
                                            <h2 class=""><?php the_sub_field('text_box_heading') ?></h2>
                                            <h4 class="callout"><?php the_sub_field('text_box_text') ?></h4>
                                            <?php if(get_sub_field('button_text')): ?>
                                                <a href="<?php the_sub_field('link'); ?>" class="btn btn-success"><?php the_sub_field('button_text'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
        
    <?php endif; ?>
     
   <!-- Layouts -->
   <div class="container services" style="padding-bottom:40px;"> 
        <?php if( get_field('sections') ): ?>
            <?php while ( has_sub_field('sections') ) : ?>
       
                <!-- SECTION HEADER -->
                <?php if( get_row_layout() == 'section_heading' ): ?>
                    <div class="row">
                        <div class="col-md-12 center-header">
                            <h2 class="uppercase"><?php the_sub_field('heading_text'); ?></h2>
                            <hr class="heading-through">
                        </div>
                    </div>
                <?php endif; ?>
                <!-- END SECTION HEADER -->
            
                <!-- FULL WIDTH IMAGE GALLERY SECTION -->
                <?php if( get_row_layout() == 'full_width_image_gallery' ): ?>
                
                    <?php $arr = get_sub_field('images'); ?>
                    <?php $chunks = array_chunk($arr, 4); ?>

                    <?php foreach($chunks as $chunk): ?>

                        <div class="row fullGallery">
                            <?php foreach($chunk as $c): ?>
                                <div class="col-md-3 image">
                                    <?php $imgurl = wp_get_attachment_image_src($c['image'], 'large-thumb'); ?>
                                    <div class="imageWrapper">
                                        <img src="<?php echo $imgurl[0]; ?>" style="width:100%;">
                                        <h4 class="caption"><?php echo $c['image_text']; ?></h4>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    <?php endforeach; ?>            
        
                <?php endif; ?>
                <!-- END FULL WIDTH IMAGE GALLERY SECTION -->
       
       
                <!-- TEXT ONE THIRD GALLERY TWO THIRDS -->
                <?php if( get_row_layout() == 'text_one_third_gallery_two_thirds' ): ?>
                    <div class="row">
                        <div class="col-md-4">
                            <?php the_sub_field('text'); ?>
                        </div>
                        <div class="col-md-8">
                            
                            <?php $arr = get_sub_field('image_gallery'); ?>
                            <?php $chunks = array_chunk($arr, 3); ?>

                            <?php foreach($chunks as $chunk): ?>
                                <div class="row projectsGrid">
                                
                                    <?php foreach($chunk as $c): ?>
                                        <div class="col-md-4 image">
                                            <?php $imgurl = wp_get_attachment_image_src($c['image'], 'large-thumb'); ?>
                                            <div class="imageWrapper">
                                                <img src="<?php echo $imgurl[0]; ?>" style="width:100%;">
                                                <?php if($c['caption']): ?>
                                                    <h4 class="caption"><?php echo $c['caption']; ?></h4>    
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- END TEXT ONE THIRD GALLERY TWO THIRDS -->
       
                <!-- ONE THIRD BOXES -->
                <?php if( get_row_layout() == 'one_third_boxes' ): ?>
                    
                    <?php $arr = get_sub_field('box'); ?>
                    <?php $chunks = array_chunk($arr, 3); ?>
                    <?php foreach($chunks as $chunk): ?>
                        <div class="row">  
                            <?php foreach($chunk as $c): ?>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h2 class="text-center" style="margin-top:0px;"><?php echo $c['heading']; ?></h2>
                                        <?php echo $c['sub_heading']; ?>
                                        <?php $imgurl = wp_get_attachment_image_src($c['image'], 'large-thumb'); ?>
                                        <img src="<?php echo $imgurl[0]; ?>" style="width:100%;">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- END ONE THIRD BOXES -->
        
            <?php endwhile; ?>
        <?php endif; ?>      
    </div>
    <!-- End Layouts -->
    
    <div class="contact">
        <div id="map" class="map" style="width:100%;height:540px;"></div>
        <div class="container">
                <div class="row">
                    <div class="col-lg-6 contactBox">
                        <h2 style="margin-top:0px;">Contact Us</h2>
                        <p><strong>Address:</strong> 10/2 Latrobe Terrace, Paddington QLD<br>
                        <strong>Phone:</strong> (07) 3369 2168<br>
                        <strong>Email:</strong> info@mglarder.com</p>
                        
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        <script>
            function initMap() {
                var mgl = {
                    lat: -27.4604344,
                    lng: 152.9999323
                };
                var centre = {
                    lat: -27.4604344,
                    lng: 152.994000
                }
                geocoder = new google.maps.Geocoder();
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: centre,
                    scrollwheel: false,
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                });
                geocoder.geocode( { 'address': '10/2 Latrobe Terrace, Paddington QLD'}, function(results, status) {
                  if (status == 'OK') {
                      map.setCenter(centre);
                      var marker = new google.maps.Marker({
                          map: map,
                          position: results[0].geometry.location
                      });
                  } else {
                      alert('Geocode was not successful for the following reason: ' + status);
                  }
               });
            }
        </script>
    </div>
    
<?php get_template_part('footer'); ?>