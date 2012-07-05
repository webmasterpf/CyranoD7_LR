 <!-- ______________________ CUSTOM NODE.TPL POUR FICHE FORMATION _______________________ -->
<!-- ______________________ COLONNE GAUCHE _______________________ -->


         <div id="left-content-fiche-formations">
              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>
                <br clear="all"/>
             

   
 <?php if (!empty($content['field_complement_info_formation'])): ?>
  <div class="complement_titre_fiche">
     <?php  print render($content['field_complement_info_formation']); /*Info complementaire sur formation*/ ?>
  </div>
 <?php endif; ?>
                
  <?php if (!empty($content['field_programme_formation'])): ?>
     <div id="programme">
     <?php  print  render($content['field_programme_formation']['field']['#title']); ?>
     <?php print render($content['field_programme_formation']);  ?>
                </div> 
               <?php endif; ?>
 <?php 
$theme_path = drupal_get_path('theme', 'cyranod7_lr');
include ($theme_path.'/includes/inc_diapo_ficheform.php');
?>
                  
          </div>
             <!-- /sidebar-left -->

		<!--fin du contenu gauche -->


            <!-- ____________LAYOUT NODE FICHE FORMATION____-->
             <!-- ______________________ CONTENU CENTRAL _______________________ -->
          <div id="middle-content-fiche-formations">
          

<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>

    <div class="content">
       <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
    </div>
 <?php //region colonne C2
$theme_path = drupal_get_path('theme', 'cyranod7_lr');
include ($theme_path.'/includes/inc_region_col_C2.php');
?>

    <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>
            
            
  </div> <!-- /node-inner -->
</div> <!-- /node-->

          </div> <!-- /#content-area -->
<?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>
           </div> <!-- /content-inner /content -->