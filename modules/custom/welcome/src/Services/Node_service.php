<?php

namespace Drupal\welcome\Services;

class Node_service {
  protected $dbal;

  public function __construct($dbal) {
    $this->dbal = $dbal;
  }

  public function getNodes($limit = 50) {

    return $limit;
    /*
    $select = $this->dbal->select('node');
    $select = $select->extend('Drupal\Core\Database\Query\PagerSelectExtender');
    $select->condition('type', 'article', '=');
    //$select->condition('status', 1, '=');
    //$select->fields('node', array('title'));
    $select->limit($limit);
    return $select->execute();
    */

  }
}