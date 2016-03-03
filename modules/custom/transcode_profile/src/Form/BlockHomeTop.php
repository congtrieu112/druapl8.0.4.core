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


	$form['fieldset_home_block_header'] = [
	  '#type' => 'details',
	  '#title' => 'BLOCK HEADER',
	  '#collapsible' => TRUE,
	  '#collapsed' => TRUE,
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


	$form['fieldset_home_block_header']['links'] = [
	  '#type' => 'details',
	  '#title' => 'Links',
	  '#collapsible' => FALSE,
	  '#collapsed' => FALSE,
	];

	$form['fieldset_home_block_header']['links']['block_home_top_link'] = [
	  '#type' => 'url',
	  '#title' => $this->t('Link'),
	  '#default_value' => $config->get('block_home_top_link'),

	];

	$form['fieldset_home_block_header']['links']['block_home_top_link_title'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('title'),
	  '#default_value' => $config->get('block_home_top_link_title'),

	];



	$form['fieldset_home_block_header_two'] = [
	  '#type' => 'details',
	  '#title' => 'BLOCK CONTENT',
	  '#collapsible' => TRUE,
	  '#collapsed' => TRUE,
	];
	$form['fieldset_home_block_header_two']['block_home_top_one_two'] = [
	  '#type' => 'textarea',
	  '#title' => $this->t('Info top one'),
	  '#default_value' => $config->get('block_home_top_one_two'),
	  '#required' => TRUE,
	];
	$form['fieldset_home_block_header_two']['block_home_top_two_two'] = [
	  '#type' => 'textarea',
	  '#title' => $this->t('Info top two '),
	  '#default_value' => $config->get('block_home_top_two_two'),
	  '#required' => TRUE,
	];


	$form['fieldset_home_block_header_two']['links'] = [
	  '#type' => 'details',
	  '#title' => 'Links',
	  '#collapsible' => FALSE,
	  '#collapsed' => FALSE,
	];

	$form['fieldset_home_block_header_two']['links']['block_home_top_link_two'] = [
	  '#type' => 'url',
	  '#title' => $this->t('Link'),
	  '#default_value' => $config->get('block_home_top_link_two'),

	];

	$form['fieldset_home_block_header_two']['links']['block_home_top_link_title_two'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('title'),
	  '#default_value' => $config->get('block_home_top_link_title_two'),

	];

	$form['fieldset_home_block_header_sevice'] = [
	  '#type' => 'details',
	  '#title' => 'BLOCK SERVICE',
	  '#collapsible' => TRUE,
	  '#collapsed' => TRUE,
	];
	$form['fieldset_home_block_header_sevice']['block_home_top_service_title'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('title'),
	  '#default_value' => $config->get('block_home_top_service_title'),

	];
	for($i=0;$i<4;$i++){
	  $form["fieldset_home_block_header_sevice"]["icon_$i"] = [
		'#type' => 'details',
		'#title' => "BLOCK ICON $i",
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	  ];
	  $form["fieldset_home_block_header_sevice"]["icon_$i"]["block_home_top_service_class_$i"] = [
		'#type' => 'textfield',
		'#title' => $this->t("class icon $i"),
		'#default_value' => $config->get("block_home_top_service_class_$i"),

	  ];
	  $form["fieldset_home_block_header_sevice"]["icon_$i"]["block_home_top_service_title_$i"] = [
		'#type' => 'textfield',
		'#title' => $this->t("title $i"),
		'#default_value' => $config->get("block_home_top_service_title_$i"),

	  ];
	  $form["fieldset_home_block_header_sevice"]["icon_$i"]["block_home_top_service_info_$i"] = [
		'#type' => 'textfield',
		'#title' => $this->t("info $i"),
		'#default_value' => $config->get("block_home_top_service_info_$i"),

	  ];


	}
	$form["fieldset_home_block_header_dowload"] = [
	  '#type' => 'details',
	  '#title' => "BLOCK DOWLOAD",
	  '#collapsible' => TRUE,
	  '#collapsed' => TRUE,
	];

	$form["fieldset_home_block_header_dowload"]["block_home_top_dowload_title"] = [
	  '#type' => 'textfield',
	  '#title' => $this->t("title"),
	  '#default_value' => $config->get("block_home_top_dowload_title"),

	];
	$form['fieldset_home_block_header_dowload']['links'] = [
	  '#type' => 'details',
	  '#title' => 'Links',
	  '#collapsible' => FALSE,
	  '#collapsed' => FALSE,
	];

	$form['fieldset_home_block_header_dowload']['links']['block_home_top_dowload_link'] = [
	  '#type' => 'url',
	  '#title' => $this->t('Link'),
	  '#default_value' => $config->get('block_home_top_dowload_link'),

	];

	$form['fieldset_home_block_header_dowload']['links']['block_home_top_dowload_link_title'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('title'),
	  '#default_value' => $config->get('block_home_top_dowload_link_title'),

	];

	$form["fieldset_home_block_header_contact"] = [
	  '#type' => 'details',
	  '#title' => "BLOCK CONTACT",
	  '#collapsible' => TRUE,
	  '#collapsed' => TRUE,
	];
	$form['fieldset_home_block_header_contact']['block_home_top_contact_title'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('title'),
	  '#default_value' => $config->get('block_home_top_contact_title'),

	];
	$form['fieldset_home_block_header_contact']['block_home_top_contact_info'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('info'),
	  '#default_value' => $config->get('block_home_top_contact_info'),

	];

	$form["fieldset_home_block_header_contact"]['email'] = [
	  '#type' => 'details',
	  '#title' => "BLOCK CONTACT ICON EMAIL",
	  '#collapsible' => TRUE,
	  '#collapsed' => TRUE,
	];
	$form["fieldset_home_block_header_contact"]['phone'] = [
	  '#type' => 'details',
	  '#title' => "BLOCK CONTACT ICON PHONE",
	  '#collapsible' => TRUE,
	  '#collapsed' => TRUE,
	];

	$form['fieldset_home_block_header_contact']['phone']['block_home_top_contact_phone_class'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('class'),
	  '#default_value' => $config->get('block_home_top_contact_phone_class'),

	];
	$form['fieldset_home_block_header_contact']['phone']['block_home_top_contact_phone'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('phone'),
	  '#default_value' => $config->get('block_home_top_contact_phone'),

	];



	$form['fieldset_home_block_header_contact']['email']['block_home_top_contact_email_class'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('class'),
	  '#default_value' => $config->get('block_home_top_contact_email_class'),

	];
	$form['fieldset_home_block_header_contact']['email']['block_home_top_contact_email'] = [
	  '#type' => 'textfield',
	  '#title' => $this->t('email'),
	  '#default_value' => $config->get('block_home_top_contact_email'),

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
	  ->set('block_home_top_link_title', $form_state->getValue('block_home_top_link_title'))
	  ->set('block_home_top_one_two', $form_state->getValue('block_home_top_one_two'))
	  ->set('block_home_top_two_two', $form_state->getValue('block_home_top_two_two'))
	  ->set('block_home_top_link_two', $form_state->getValue('block_home_top_link_two'))
	  ->set('block_home_top_link_title_two', $form_state->getValue('block_home_top_link_title_two'))
	  ->save();
  }

}
