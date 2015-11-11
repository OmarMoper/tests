<?php

/**
 * @file
 * Contains \Drupal\tests\Test\TestResultInterface.
 */

namespace Drupal\tests;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Interface for test result.
 */
interface TestResultInterface extends ContentEntityInterface {

  public function getResult();
  public function evaluate();
  public function isApproved();
  public function getAnswers();
  public function addAnswer(AnswerInterface $answer);
}
