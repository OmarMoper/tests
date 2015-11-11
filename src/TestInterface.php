<?php

/**
 * @file
 * Contains \Drupal\tests\Entity\TestInterface.
 */

namespace Drupal\tests;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Interface for tests.
 */
interface TestInterface extends ContentEntityInterface {

  public function getQuestions();
  public function addQuestion(QuestionInterface $question);
}
