<?php declare(strict_types = 1);

/**
 * @file
 * Theme settings form for imdb theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function imdb_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['imdb'] = [
    '#type' => 'details',
    '#title' => t('imdb'),
    '#open' => TRUE,
  ];

  $form['imdb']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
