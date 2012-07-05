<?php
  $theme_path = drupal_get_path('theme', 'cyranod7_lr');
  include ($theme_path.'/includes/inc_header.php');
  ?>

  <!-- ______________________ LAYOUT PAGE BASIQUE PAGE.TPL _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->

   <div id="contentPage" class="clearfix">

    <div id="content">
              <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb || ($page ['content_top']) ): ?>
            <div id="content-top">
	<span id="ariane"> 
            <?php $breadcrumb = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb()));
             print $breadcrumb; ?></span>

              <?php print render ($page ['content_top']); ?>
            </div>
              <?php endif; ?><!-- /#content-top -->
              <!-- Si besoin de colonne sans node custom tpl -->
              <div id="left-content">
        
  
	 <?php if ($page ['left']): ?>
            <?php print render ($page ['left']); ?>
	<?php endif; ?>
          </div>
             	<!--fin du contenu gauche -->

      <div id="content-inner" class="inner column center">

        <?php if ($messages || $tabs || $action_links): ?>
          <div id="content-header">

          

            <?php if ($page['highlight']): ?>
              <div id="highlight"><?php print render($page['highlight']) ?></div>
            <?php endif; ?>

          

            <?php print $messages; ?>
            <?php print render($page['help']); ?>
            <?php print render($tabs); ?>

          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>

        <?php print $feed_icons; ?>

      </div>
    </div> <!-- /content-inner /content -->

  

    <!-- Si besoin de colonne sans node custom tpl
    <?php if ($page ['right']): ?>
        
         <div id="right-content" class="colonne">
            <?php print render ($page ['right']); ?>
        </div>
        <?php endif; ?>
    <!-- /colonne-right -->

 <br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->

   
            <div id="content-bottom">
                 <?php if ($page ['content_bottom']): ?>
              <?php print ($page ['content_bottom']); ?>
                  <?php endif; ?>
    <?php if ($main_menu || $secondary_menu): /*Si utilise Menu Principal de Drupal alors il faut cacher cette partie*/ ?>
      <div id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";} if (!empty($secondary_menu)) {print " with-secondary";} ?>">
        <?php /*print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); */?>
        <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
      </div>
    <?php endif; ?>
                
            </div><!-- /#content-bottom -->
        


  </div> <!-- /main -->
     <?php
$theme_path = drupal_get_path('theme', 'cyranod7_lr');
include ($theme_path.'/includes/inc_footer.php');
?>
 