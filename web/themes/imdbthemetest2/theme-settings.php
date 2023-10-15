<?php declare(strict_types = 1);

/**
 * @file
 * Theme settings form for imdbthemetest2 theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function imdbthemetest2_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['imdbthemetest2'] = [
    '#type' => 'details',
    '#title' => t('imdbthemetest2'),
    '#open' => TRUE,
  ];

  $form['imdbthemetest2']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
