<?php

namespace Drupal\welcome\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DefaultForm.
 *
 * @package Drupal\welcome\Form
 */
class DefaultForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'welcome.Default',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'default_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('welcome.Default');
    $form['some_text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('some_text'),
      '#description' => $this->t('bla bla'),
      '#default_value' => $config->get('some_text'),
    ];
    $form['choose'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('choose'),
      '#description' => $this->t('destiny'),
      '#default_value' => $config->get('choose'),
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

    $this->config('welcome.Default')
      ->set('some_text', $form_state->getValue('some_text'))
      ->set('choose', $form_state->getValue('choose'))
      ->save();
  }


}
