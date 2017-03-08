<?php

function conext_theme() {
  return array(
    'user_login' => array(
      'template' => 'user-login',
      'variables' => array('form' => NULL), ## you may remove this line in this case
    ),
    'user_register' => array(
      'template' => 'user-register',
      'variables' => array('form' => NULL), ## you may remove this line in this case
    ),
    'user_pass' => array(
      'template' => 'user-pass',
      'variables' => array('form' => NULL), ## you may remove this line in this case
    ),
  );
}

function conext_form_alter(&$form, &$form_state, $form_id) {
  if ( TRUE === in_array( $form_id, array( 'user_login') ) ) {
    $form['name']['#attributes']['placeholder'] = t( 'Username' );
		$form['name']['#attributes']['class'][] = 'input-text full-width';
    $form['pass']['#attributes']['placeholder'] = t( 'Password' );
		$form['pass']['#attributes']['class'][] = 'input-text full-width';
    $form['name']['#title_display'] = "invisible";
    $form['pass']['#title_display'] = "invisible";
		$form['name']['#description'] = t('');
    $form['pass']['#description'] = t('');
		$form['actions']['submit']['#attributes']['class'][] = 'btn style2 full-width';
	} else if ( TRUE === in_array( $form_id, array( 'user_pass') ) ) {
		$form['name']['#attributes']['class'][] = 'input-text full-width';
		$form['actions']['submit']['#attributes']['class'][] = 'btn style2 full-width';
	}
}

function conext_preprocess_user_login(&$variables) {
	//$variables['form'] = drupal_build_form('user_login', user_login(array(), $form_state));
	$variables['form'] = drupal_get_form("user_login");
}

function conext_preprocess_user_pass(&$variables) {
	$variables['form'] = drupal_get_form("user_pass");
}