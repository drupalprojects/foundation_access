<?php
/**
 * Implements hook_form_FORM_ID_alter().
 */
function foundation_access_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['zurb_foundation']['foundation_access'] = array(
    '#type' => 'fieldset',
    '#title' => t('Foundation Access'),
  );
  // outline labeling
  $form['zurb_foundation']['foundation_access']['foundation_access_outline_labeling'] = array(
    '#type' => 'select',
    '#title' => t('Outline labeling'),
    '#description' => t('How would you like the outline to be presented in the menu?'),
    '#options' => array(
      'auto_both'  => t('Auto label and number lessons'),
      'auto_num' => t('Auto apply number only'),
      'auto_text' => t('Auto apply label only'),
      'none' => t('None'),
    ),
    '#default_value' => theme_get_setting('foundation_access_outline_labeling'),
  );
  // outline label
  $form['zurb_foundation']['foundation_access']['foundation_access_outline_label'] = array(
    '#type' => 'textfield',
    '#title' => t('Outline label'),
    '#description' => t('The label to apply to the outline automatically (assuming the previous setting says to do so).'),
    '#default_value' => theme_get_setting('foundation_access_outline_label'),
  );
}
