    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">&copy; 2017 - MGL All rights reserved <span class="pull-right">Social icons go in here</span></div>
            </div>
        </div>
    </div>
    
    <script src="<?php echo bloginfo('template_directory'); ?>/js/cycle2.js"></script>
    <script>
        jQuery(document).ready(function($){
            //centerHeight($('div.slideshow').outerHeight(), $('div.slide-text-bg').outerHeight(), $('div.slide-text-bg'));
            centerHeight($('div.header').height() - 10, $('nav.main-nav').height(), $('nav.main-nav'));
            
            $(window).on('resize', function(){
                centerHeight($('div.slideshow').outerHeight(), $('div.slide-text-bg').outerHeight(), $('div.slide-text-bg'));
                centerHeight($('div.header').height() - 10, $('nav.main-nav').height(), $('nav.main-nav'));
            });
            $(window).on('load', function(){
                centerHeight($('div.slideshow').outerHeight(), $('div.slide-text-bg').outerHeight(), $('div.slide-text-bg'));
            });
                        
            function centerHeight(elone, eltwo, marginEl) {
                var elOneHeight = elone;
                var elTwoHeight = eltwo;
                console.log(elOneHeight);
                return marginEl.css('marginTop', (elOneHeight - elTwoHeight) / 2); 
            }
        });
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjX21SYwo0hFnLSDPw4JHJOHg7FDVgU68&callback=initMap">
    </script>
  
    <?php wp_footer(); ?>
    
</body>
</html>