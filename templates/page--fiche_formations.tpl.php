<?php include "inc_header.php"; ?>
 <!-- ______________________ LAYOUT PAGE fiche_formations _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->
  
      <div id="contentPage">
      
          <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top ): ?>
            <div id="content-top">
	<span id="ariane"> <?php print $breadcrumb; ?></span>

              <?php print $content_top; ?>
            </div> <!-- /#content-top -->

        <div id="content-inner-fiche-formations" class="inner column center">




          <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>


      
      <!-- ______________________ INSERTION DU CONTENU DU NODE _______________________ -->
      
            <?php print $content; ?>
              <?php print $feed_icons; ?>
          </div> <!-- /#content-area -->

        

          
     <!-- ______________________FIN INSERTION DU CONTENU DU NODE _______________________ -->
     

            
       

       
		  <!-- ______________________ COLONNE DROITE _______________________ -->
       
         <!--d�but du contenu droit -->
		<div id="right-content-fiche-formations">
			
		 <?php if ($right): ?>
            <?php print $right; ?>
                    <?php endif; ?>
        </div>
         <!-- /sidebar-right -->
 
   
    	 <br clear="all"/>
         <!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
	 </div> <!-- /contentPage -->
	 <br clear="all"/>
	  <?php include "inc_footer.php";?>
         <?php endif; ?>
     