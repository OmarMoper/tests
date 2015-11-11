<?php

/**
 * @file
 * Contains \Drupal\tests\Test\QuestionInterface;
 */

namespace Drupal\tests;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Interface for questions.
 */
interface QuestionInterface extends ContentEntityInterface {

  public function addSolution(SolutionInterface $solution);
  public function getSolutions();
  public function answer(AnswerInterface $answer);
}
