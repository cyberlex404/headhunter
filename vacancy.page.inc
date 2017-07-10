<?php

/**
 * @file
 * Contains vacancy.page.inc.
 *
 * Page callback for Vacancy entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Vacancy templates.
 *
 * Default template: vacancy.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_vacancy(array &$variables) {
  // Fetch Vacancy Entity Object.
  $vacancy = $variables['elements']['#vacancy'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
