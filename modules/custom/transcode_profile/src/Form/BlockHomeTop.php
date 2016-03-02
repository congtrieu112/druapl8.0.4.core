<?php

/**
 * @file
 * Contains Drupal\transcode_profile\Form\BlockHomeTop.
 */

namespace Drupal\transcode_profile\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AdminSettingsFrom.
 *
 * @package Drupal\transcode_profile\Form
 */
class BlockHomeTop extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'transcode_profile.block_home_top',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_block_home_top';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('transcode_profile.block_home_top');
//    $form['upload_image'] = [
//      '#type' => 'file',
//      '#title' => $this->t('upload image'),
//      '#description' => $this->t('up anh'),
//      '#default_value' => $config->get('upload_image'),
//        '#multiple'=>true
//    ];
    
    
      $form['fieldset_home_block_header'] = [
      '#type' => 'details',
      '#title' => 'BLOCK HEADER',
      '#collapsible' => FALSE,
      '#collapsed' => FALSE,
      ];
      $form['fieldset_home_block_header']['block_home_top_one'] = [
        '#type' => 'textarea',
          '#title' => $this->t('Info top one'),
          '#default_value' => $config->get('block_home_top_one'),
          '#required' => TRUE,
      ];
      $form['fieldset_home_block_header']['block_home_top_two'] = [
        '#type' => 'textarea',
          '#title' => $this->t('Info top two '),
          '#default_value' => $config->get('block_home_top_two'),
          '#required' => TRUE,
      ];
      $url = $title = '';
      $link = array();
      $link = $config->get('block_home_top_link');
      if (isset($link['url']) && isset($link['title'])) {
        $url = $link['url'];
        $title = $link['title'];
      }
      $form['fieldset_home_block_header']['block_home_top_link'] = [
           '#type' => 'operations',
            '#title' => $this->t('Link'),
            '#default_value' => [
              'title' => $title,
              'url' => $url,
            ],

      ];
//       $form['fieldset_home_block_header']['block_home_top_three'] = [
//        '#type' => 'url',
//           '#url' => \Drupal\Core\Url::fromRoute('transcode_profile.admin_settings_from'),
//          '#title' => $this->t('Info top three '),
//          '#default_value' => $config->get('block_home_top_two'),
//      ];
      


    
//    $form['fieldset_simulator_block_header']['upload_image'] = [
//    '#type' => 'managed_file',
//    '#title' => $this->t('Upload photos'),
//    '#upload_location' => 'public://',
//    '#multiple' =>TRUE,
//    '#default_value' => $config->get('upload_image'),   
//    '#description' => $this->t('up anh'),
//    ];
//    
    
    
    
    
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

    $this->config('transcode_profile.block_home_top')
      ->set('block_home_top_one', $form_state->getValue('block_home_top_one'))
      ->set('block_home_top_two', $form_state->getValue('block_home_top_two'))
      ->set('block_home_top_link', $form_state->getValue('block_home_top_link'))
      ->save();
  }

}
