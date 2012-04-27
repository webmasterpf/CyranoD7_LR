<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>
<!-- ______________________ LAYOUT HOMEPAGE _______________________ -->
 <!-- ______________________ CONTENU _______________________ -->
    
	<div id="mainPage">
	 

          <?php if ($content_top_home): ?>
            <div id="content-top-home">
              <?php print $content_top_home; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

   <!-- ______________________ ZONE DIAPO _______________________ -->
			
               <?php if ($page['DiapoHP']): ?>

                 <div id="HPDiapo">
                  <?php print render($page['DiapoHP']); ?>
                 </div>
              <?php endif; ?>
            
         
		 
<!-- ______________________ PARTIE DROITE _______________________ -->
      
	<div id="HPDroite">
	 <?php if ($page ['PartieDroite1']): ?>
	 <div id="HPDroite1"><?php print render ($page ['PartieDroite1']); ?></div>
	 <?php endif; ?>
	 
	  <?php if ($page ['PartieDroite2']): ?>
	 <div id="HPDroite2"><?php print render ($page ['PartieDroite2']); ?></div>
	 <?php endif; ?>
	 
	  <?php if ($page ['PartieDroite3']): ?>
	 <div id="HPDroite3"><?php print render ($page ['PartieDroite3']); ?></div>
	 <?php endif; ?>
        
	  
   </div><!-- /Partie Droite -->
	<br clear="all"/>
		<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($page ['content_bottom_home']): ?>
    <div id="content-bottom-home">
      <?php print render ($page ['content_bottom_home']); ?>
         <?php print $feed_icons; ?>
    </div><!-- /#content-bottom -->
    <?php endif; ?>
    

    <?php if ($page ['content_bottom']): ?>
            <div id="content-bottom">
              <?php print ($page ['content_bottom']); ?>
            </div><!-- /#content-bottom -->

          <?php endif; ?>
 </div> <!-- /mainPage -->
     <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>
