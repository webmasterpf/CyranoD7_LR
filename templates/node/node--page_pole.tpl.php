<!--_____________ /////////\\\\\\\\\\\_____________________ -->
<!--_____________  NODE.TPL PAGE POLE CUSTOM _____________________ -->
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
	<div class="node-inner">
  
      <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_570_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_570_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_570_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
       *
       * Couleur des border de separation,sur la colonne 2
       * .rouge-bleu
       * .rose-bleu
       * .noir-vert
       * .bleu-violet
       * .vert-violet
       *
       *    * Couleur des H1 de page :
   * rouge
   * orange
   * vert
   * bleu
   * rose
   * violet
         */?>
    
 
<!-- ______________________ COLONNE CENTRALE _______________________ -->
 <div id="colonne-unik" class="pole-metiers">

   <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>
      
<?php  print render($title_prefix); ?>
         <?php if ($title): ?><h1 class="title violet"><?php print $title; ?></h1><?php endif; ?>
   <?php print render($title_suffix); ?>

  <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
  	<!-- __________ Debut des blocs poles metiers ___________ -->

<?php 
$theme_path = drupal_get_path('theme', 'cyranod7_lr');
include ($theme_path.'/includes/inc_pole_orientation.php');
?>

 <?php 
$theme_path = drupal_get_path('theme', 'cyranod7_lr');
include ($theme_path.'/includes/inc_pole_restauration.php');
?>            
            <?php 
$theme_path = drupal_get_path('theme', 'cyranod7_lr');
include ($theme_path.'/includes/inc_pole_service.php');
?>

 <?php 
$theme_path = drupal_get_path('theme', 'cyranod7_lr');
include ($theme_path.'/includes/inc_pole_industrie.php');
?>

  	<!-- __________ Fin des blocs poles metiers ___________ -->
    <?php if (!empty($content['links']['terms'])): ?>
      <div class="terms"><?php print render($content['links']['terms']); ?></div>
    <?php endif;?>
  	
    <?php if (!empty($content['links'])): ?>
	    <div class="links"><?php print render($content['links']); ?></div>
	  <?php endif; ?>
</div> <!-- /colonne 2 -->
        
         
        
	</div> <!-- /node-inner -->
</div> <!-- /node-->

<?php print render($content['comments']); ?>