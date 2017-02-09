<?php

namespace Drupal\welcome\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class WelcomeController.
 *
 * @package Drupal\welcome\Controller
 */
class WelcomeController extends ControllerBase {

  /**
   * Welcome.
   *
   * @return string
   *   Return Hello string.
   */
  public function welcome_test() {
    
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello MOFO, this is your d8')
    ];
  }

}
