<?php

/**
 * @file
 * Contains \Drupal\custom_user_register\Plugin\Block
 */

namespace Drupal\custom_user_register\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'custom_form_in_block' block.
 *
 * @Block(
 *   id = "custom_user_register",
 *   admin_label = @Translation("Custom user register"),
 * )
 */
class CustomUserRegister extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\custom_user_register\Form\CustomUserRegisterForm');
    return $form;

  }
}
