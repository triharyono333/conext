<?php

/**
 * @file
 * Code required only when rendering the Unicode admin form.
 */

/**
 * Unicode Admin Form; Adjust Unicode settings.
 *
 * @param array $form_state
 *   An associative array containing the current state of the form.
 *
 * @ingroup forms
 *
 * @see unicode_admin_form_submit()
 */
function unicode_admin_form($form = array(), $form_state) {

  $settings = unicode_settings_get();

  $form['strategy'] = array(
    '#title' => t('Strategy'),
    '#description' => t('Whitelist or blacklist entities to check for unicode values.'),
    '#type' => 'select',
    '#options' => array(
      'whitelist' => t('Whitelist'),
      'blacklist' => t('Blacklist'),
    ),
    '#required' => TRUE,
    '#default_value' => $settings['strategy'],
  );

  $entities = entity_get_info();

  $options = array();

  foreach($entities as $key => $entity) {
    $options[$key] = $entity['label'];
  }

  $form['entities'] = array(
    '#title' => t('Entities'),
    '#type' => 'select',
    '#options' => $options,
    '#multiple' => TRUE,
    '#default_value' => $settings['entities'],
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
  );

  return $form;
}

/**
 * Submit handler for adjust Unicode settings.
 */
function unicode_admin_form_submit($form, $form_state) {

  $settings = array(
    'strategy' => $form_state['values']['strategy'],
    'entities' => $form_state['values']['entities'],
  );

  unicode_settings_save($settings);
}
