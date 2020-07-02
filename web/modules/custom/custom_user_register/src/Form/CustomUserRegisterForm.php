<?php
/**
 * @file
 * Contains \Drupal\custom_user_register\Form.
 */
namespace Drupal\custom_user_register\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomUserRegisterForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_form_in_block_form';
  }
  /**
   * {@inheritdoc}
   * Form
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = array(
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('First and Last Name:'),
      ),
    );
    $form['company'] = array(
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Company*'),
      ),
    );

    $form['email'] = array(
      '#type' => 'email',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Business Email*'),
      ),
    );

    $form['job_role'] = array(
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Job Role*'),
      ),
    );

    $form['employees'] = array(
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Employees*'),
      ),
    );

    $form['country'] = array(
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Country*'),
      ),
    );

    $form['phone'] = array(
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Phone'),
      ),
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Send me the report',
    );
    $form['#suffix'] = '<p>By submitting this form, you confirm that you agree to the storing and processing of your personal data by bpm\'online and SmartYou as described in the Privacy Policy</p>';

    return $form;
  }
  /**
   * {@inheritdoc}
   * Submit
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $your_name = $form_state->getValue('name');
    \Drupal::messenger()->addMessage('Thank you for form submit ' . $this->t(($your_name)));

  }
}
