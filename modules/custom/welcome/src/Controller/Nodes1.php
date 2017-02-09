<?php

namespace Drupal\welcome\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\welcome\Services\Node_service;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Class Nodes
 *
 * @package Drupal\welcome\Controller
 */
class Nodes1 extends ControllerBase {
  /**
   * Nodes.
   *
   * @return string of nodes data
   *   Return data.
   */
  private $nodesList;

  public
  function __construct(Node_service $nodesList) {
    $this->nodesList = $nodesList;
  }

  public static
  function create(ContainerInterface $container) {
    $nodesList = $container->get('welcome.nodes_get');

    return new static($nodesList);
  }


  public
  function show_me($count) {

    $nodes = $this->nodesList->getNodes($count);
    $url = Url::fromUri("https://www.lelo.com");

    //$url2 = new Url('welcome.welcome_controller_welcome')​;

    //$my_link = \Drupal::service('link_generator')->generate($url->toString(), $url);
    $my_link = $this->l($url->toString(), $url);

    // $db = \Drupal::database();

    // $select = $db->select('node');
    //$select->extend('Drupal\Core\Database\Query\PagerSelectExtender');
    //$select->condition('type', 'article', '=');
    //$select->condition('status', 1, '=');
    //$select->fields('node', array('title'));
    //$select->limit($count);
    // $select->execute();


    $user = \Drupal::service('current_user');
    $uid = $user->id();
    $formatted_name = $user->getDisplayName();
    $raw_name = $user->getAccountName();

    $route_name = \Drupal::service('current_route_match')->getRouteName();


    //$my_link2 = \Drupal::service('link_generator')->generate($url2->toString(), $url2);

    if ($nodes < 40) {
      return new RedirectResponse(\Drupal::url('welcome.welcome_controller_welcome'));

      //return $this->redirect($route_name, array($count =>'40'), $options, $status_code);
    }

    if ($cache = \Drupal::cache("render")->get("node_1_test")) {
      //kint($cache);
      return [
        '#type' => 'markup',
        '#markup' => $cache->data,
      ];
    }
    else {
      $string = $route_name . ' ' . $my_link . '<br>' . $record . '<br>' . $formatted_name;
      \Drupal::cache("render")->set("node_1_test", $string);
      return [
        '#type' => 'markup',
        '#markup' => $string,
      ];
    }
  }
}