<?php

/**
 * @file
 * Contains \Drupal\tests\Test\SolutionInterface.
 */

namespace Drupal\tests;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Interface for answer.
 */
interface AnswerInterface extends ContentEntityInterface {

  public function isCorrect();
  public function evaluate($result);
}
