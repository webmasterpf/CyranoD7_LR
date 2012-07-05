<?php
/*
 * Inclusion d'une vue dans node.tpl
 * Usage pour drupal 7 selon evolution du code
 */
/* http://drupal.org/node/1463822
 * Inclus la vue , ajoute une differenciation de variable
 * Si vide affiche le texte vide de la vue 
 * $viewname_pm3 = 'NOM_De_LA_VUE';
 * $viewdisplay_pm3 = $view->set_display('DISPLAY_CHOISI');
 * Si besoin d'argument, utiliser la ligne dédiée $args et l'ajouter comme ceci $view->preview($viewdisplay_pm3, $args)
 * Modifer les classes , le texte vide selon besoin
 * Le texte vide peut être réglé dans Views UI directment avec $emptyTextVue
 */

?>
<?php
$viewname_pm3 = 'pole_metiers';/*Nom de la vue en Minuscules !!*/
$view = views_get_view ($viewname_pm3);
$viewdisplay_pm3 = $view->set_display('block_2');
//$args_pm3 = $view->set_arguments(array($node->nid));

$emptyTextVue = $view->display_handler->get_option('empty','area');
$emptyText = $view->display_handler->set_option('empty','<div class="ma-classe">TEXTE VIDE A MODIFIER.</div>');

//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="restauration" class="bloc-pole"><h3 class="classe-h3">'.$view->get_title().'</h3>' .$view->preview($viewdisplay_pm3).'</div>';

  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
//     $outputEmpty = '<div id="MODIFIER"><h3 class="classe-h3">'.$view->get_title().'</h3>'.$emptyText.'</div>';
     $outputEmpty = '<div id="restauration" class="bloc-pole"><h3 class="classe-h3">'.$view->get_title().'</h3>'.$emptyTextVue.'</div>';
    // drupal_set_message('$EmptyTextVue : '.$emptyTextVue.'status');
     //Affichage du texte vide
  print $outputEmpty;
}


?>
