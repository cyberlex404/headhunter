<?php

namespace Drupal\headhunter\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Vacancy entities.
 *
 * @ingroup headhunter
 */
interface VacancyInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Vacancy name.
   *
   * @return string
   *   Name of the Vacancy.
   */
  public function getName();

  /**
   * Sets the Vacancy name.
   *
   * @param string $name
   *   The Vacancy name.
   *
   * @return \Drupal\headhunter\Entity\VacancyInterface
   *   The called Vacancy entity.
   */
  public function setName($name);

  /**
   * Gets the Vacancy creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Vacancy.
   */
  public function getCreatedTime();

  /**
   * Sets the Vacancy creation timestamp.
   *
   * @param int $timestamp
   *   The Vacancy creation timestamp.
   *
   * @return \Drupal\headhunter\Entity\VacancyInterface
   *   The called Vacancy entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Vacancy published status indicator.
   *
   * Unpublished Vacancy are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Vacancy is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Vacancy.
   *
   * @param bool $published
   *   TRUE to set this Vacancy to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\headhunter\Entity\VacancyInterface
   *   The called Vacancy entity.
   */
  public function setPublished($published);

}
