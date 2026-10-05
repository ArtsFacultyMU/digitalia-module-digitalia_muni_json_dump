<?php

namespace Drupal\digitalia_muni_json_dump\Plugin\Action;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;

/**
 * Provides JSON dump for node.
 *
 * @Action(
 *   id = "digitalia_muni_json_dump_digitalia_muni_entity",
 *   label = @Translation("Create JSON dump (digitalia_muni_entity)"),
 *   type = "digitalia_muni_entity",
 *   category = @Translation("Digitalia")
 * )
 */
class JsonDumpDigitaliaMuniEntityAction extends JsonDumpActionBase implements ContainerFactoryPluginInterface {
  /**
   * {@inheritdoc}
   */
  public function access($entity, AccountInterface $account = NULL, $return_as_object = FALSE) {
    $access = $entity->access("update", $account, TRUE);
    return $return_as_object ? $access : $access->isAllowed();
  }

  /**
   * {@inheritdoc}
   */
  public function execute($entity = NULL) {
    if (!$entity) {
      return;
    }

    $this->executeGeneric($entity);
  }
}
