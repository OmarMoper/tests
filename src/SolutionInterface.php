<?php

/**
 * @file
 * Contains \Drupal\tests\Test\SolutionInterface.
 */

namespace Drupal\tests;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Interface for solution.
 */
interface SolutionInterface extends ContentEntityInterface {

  public function isCorrect();
}
