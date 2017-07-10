<?php

namespace Drupal\headhunter;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Vacancy entity.
 *
 * @see \Drupal\headhunter\Entity\Vacancy.
 */
class VacancyAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\headhunter\Entity\VacancyInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished vacancy entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published vacancy entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit vacancy entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete vacancy entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add vacancy entities');
  }

}
