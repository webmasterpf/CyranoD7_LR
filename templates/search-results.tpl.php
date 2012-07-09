<!--_____________ /////////\\\\\\\\\\\_____________________ -->
<!--_____________  NODE.TPL PAGE SEARCH CUSTOM _____________________ -->
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
        <div id="colonne-1" class="col1_layout_225_735">
           <h1><?php print t('Search results');?></h1>


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
 <div id="colonne-2" class="col2_layout_225_735 search-results">
  	  <?php if ($search_results) : ?>
  
  <ol class="search-results <?php print $module; ?>-results">
    <?php print $search_results; ?>
  </ol>
  <?php print $pager; ?>
<?php else : ?>
  <h2><?php print t('Your search yielded no results');?></h2>
  <?php print search_help('search#noresults', drupal_help_arg()); ?>
<?php endif; ?>

  	


         
        
	</div> <!-- /node-inner -->
</div> <!-- /node-->

<?php print render($content['comments']); ?>