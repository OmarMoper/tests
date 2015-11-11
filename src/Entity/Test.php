<?php

/**
 * @file
 * Contains \Drupal\tests\Entity\Test.
 */

namespace Drupal\tests\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\tests\TestInterface;
use Drupal\tests\QuestionInterface;

/**
 * Defines the test entity class.
 *
 * @ContentEntityType(
 *   id = "test",
 *   label = @Translation("Test"),
 *   handlers = {
 *     "storage" = "Drupal\user\UserStorage",
 *     "storage_schema" = "Drupal\user\UserStorageSchema",
 *     "access" = "Drupal\user\UserAccessControlHandler",
 *     "list_builder" = "Drupal\user\UserListBuilder",
 *     "views_data" = "Drupal\user\UserViewsData",
 *     "form" = {
 *       "default" = "Drupal\user\ProfileForm",
 *       "cancel" = "Drupal\user\Form\UserCancelForm",
 *       "register" = "Drupal\user\RegisterForm"
 *     },
 *     "translation" = "Drupal\user\ProfileTranslationHandler"
 *   },
 *   admin_permission = "administer tests",
 *   base_table = "test",
 *   data_table = "test_field_data",
 *   translatable = FALSE,
 *   fieldable   = TRUE,
 *   entity_keys = {
 *     "id" = "testid",
 *   },
 * )
 */
class Test extends ContentEntityBase implements TestInterface {

  use EntityChangedTrait;

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields['testid'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Test ID'))
      ->setDescription(t('The test ID.'))
      ->setReadOnly(TRUE)
      ->setSetting('unsigned', TRUE);

    // The name should not vary per language. The username is the visual
    // identifier for a user and needs to be consistent in all languages.
    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The name of this test.'))
      ->setRequired(TRUE);

    $fields['status'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Test status'))
      ->setDescription(t('Whether the test is active or blocked.'))
      ->setDefaultValue(FALSE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the user was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the user was last edited.'))
      ->setTranslatable(TRUE);

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function addQuestion(QuestionInterface $question) {

  }

  /**
   * {@inheritdoc}
   */
  public function getQuestions() {
  }

}
