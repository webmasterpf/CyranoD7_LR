<!--_____________ /////////\\\\\\\\\\\_____________________ -->
<!--_____________  NODE.TPL PAGE ERREUR CUSTOM _____________________ -->
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
              <!-- ______________________ COLONNE C1 _______________________ -->
        <div id="colonne-1" class="col1_layout_250_700">
            <?php  print render($title_prefix); ?>
         <?php if ($title): ?><h1 class="title rouge"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>


	 <?php //region colonne C1
$theme_path = drupal_get_path('theme', 'cyranod7_lr');
include ($theme_path.'/includes/inc_region_col_C1.php');
?>
          </div>
             	<!--fin du contenu gauche -->

    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $user_picture; ?>
		    
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $date; ?> — <?php print $name; ?></span>
    <?php endif; ?>
<!-- ______________________ COLONNE C2 _______________________ -->
 <div id="colonne-2" class="col2_layout_250_700 contentErreur vert-violet">
  	  <?php 
  	    // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content['body']);
       ?>
  	

 <?php /*Champ conditionnel*/ if (!empty($content['field_vue_content'])): ?>
  <div class="liste-archive">
     <?php  print render($content['field_vue_content']);?>
  </div>
 <?php endif; ?>


  	
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