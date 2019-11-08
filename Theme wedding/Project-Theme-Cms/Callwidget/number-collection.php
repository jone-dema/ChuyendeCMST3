
   <div class="wrap_one"> 

     <?php   if ( is_active_sidebar('collection-content') ) {
                dynamic_sidebar('collection-content');
                
        } else {
                _e('This is widget area. Go to Appearance -> Widgets to add some widgets.', 'hayghe');
        }
?>
      
   </div>