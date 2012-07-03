<?php
/* 
 * Le footer du site
 * Placé en includes
 */

?>
<!-- ______________________ FOOTER _______________________ -->
<?php if(!empty($page['footer'])): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div> <!-- /footer -->
  <?php endif; ?>
  <div id="bloc_stats">
      STATS DESACTIVEES !!!!
<?php
 // $theme_path = drupal_get_path('theme', 'cyranod7_lr');
  //include ($theme_path.'/js/code_stats.php');
  ?>
</div>
    </div> <!-- /general OR /page -->
