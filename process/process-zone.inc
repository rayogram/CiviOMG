<?php /**
 * Implements hook_process_zone().
 */
function civiomg_alpha_process_zone(&$vars) {
  $theme = alpha_get_theme();
  
  if ($vars['elements']['#zone'] == 'header') {
    $vars['messages'] = $theme->page['messages'];
  }
  if ($vars['elements']['#zone'] == 'navigation') {
    $vars['breadcrumb'] = $theme->page['breadcrumb'];
  }
}
