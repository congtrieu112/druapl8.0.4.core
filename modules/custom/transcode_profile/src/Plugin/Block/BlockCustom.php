<?php

/**
 * @file
 * Contains \Drupal\transcode_profile\Plugin\Block\BlockCustom.
 */

namespace Drupal\transcode_profile\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'BlockCustom' block.
 *
 * @Block(
 *  id = "block.custom",
 *  admin_label = @Translation("block custom"),
 * )
 */
class BlockCustom extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['text'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('text'),
      '#description' => $this->t('content test'),
      '#default_value' => isset($this->configuration['text']) ? $this->configuration['text'] : '',
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['text'] = $form_state->getValue('text');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['block.custom_text']['#markup'] = '<p>' . $this->configuration['text'] . '</p>';

    return $build;
  }

}
