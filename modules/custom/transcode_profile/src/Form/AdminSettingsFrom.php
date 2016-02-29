<?php

/**
 * @file
 * Contains Drupal\transcode_profile\Form\AdminSettingsFrom.
 */

namespace Drupal\transcode_profile\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AdminSettingsFrom.
 *
 * @package Drupal\transcode_profile\Form
 */
class AdminSettingsFrom extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'transcode_profile.adminsettingsfrom',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'admin_settings_from';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('transcode_profile.adminsettingsfrom');
//    $form['upload_image'] = [
//      '#type' => 'file',
//      '#title' => $this->t('upload image'),
//      '#description' => $this->t('up anh'),
//      '#default_value' => $config->get('upload_image'),
//        '#multiple'=>true
//    ];
    
    $form['upload_image'] = [
    '#type' => 'managed_file',
    '#title' => $this->t('Upload photos'),
    '#upload_location' => 'public://',
    '#multiple' =>TRUE,
    '#default_value' => $config->get('upload_image'),   
    '#description' => $this->t('up anh'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('transcode_profile.adminsettingsfrom')
      ->set('upload_image', $form_state->getValue('upload_image'))
      ->save();
  }

}
