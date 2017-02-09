<?php

namespace Drupal\welcome\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\views\ViewsData;

/**
 * Class newController.
 *
 * @package Drupal\welcome\Controller
 */
class newController extends ControllerBase {

  /**
   * Drupal\views\ViewsData definition.
   *
   * @var \Drupal\views\ViewsData
   */
  protected $viewsViewsData;

  /**
   * {@inheritdoc}
   */
  public function __construct(ViewsData $views_views_data) {
    $this->viewsViewsData = $views_views_data;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.views_data')
    );
  }

  /**
   * Hey_ho.
   *
   * @return string
   *   Return Hello string.
   */
  public function hey_ho() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hey_ho')
    ];
  }

}
