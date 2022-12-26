<?php

namespace Drupal\covid_custom_module\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Url;
use Drupal\user\Entity\User;

/**
 * Provides a block for Quick Links.
 *
 * @Block(
 *   id = "covid_register_block",
 *   admin_label = @Translation("Covid Register Block"),
 * )
 */
class CovidRegisterBlock extends BlockBase implements ContainerFactoryPluginInterface {
  /**
   * @var AccountInterface $account
   */
  protected $account;

  /**
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   * @param \Drupal\Core\Session\AccountInterface $account
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, AccountInterface $account) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->account = $account;
  }

  /**
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   *
   * @return static
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('current_user')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $base_path = Url::fromRoute('<front>', [], ['absolute' => TRUE])->toString();

    $node = \Drupal::routeMatch()->getParameter('node');
    $register_link = '';
    $register_text = '';
    $covid_nid = 0;

    if($node instanceof \Drupal\node\NodeInterface) {
      $covid_nid = $node->id();

      $user = User::load($this->account->id());
      $field_center = $user->get('field_center')->getValue();

      if(!empty($this->account->id())) {
        if(empty($field_center)) {
          $register_link = $base_path . 'update_covid_centre';
        } else {
          $register_text = 'Already Registered. <a href="'.$base_path.'user">View Account</a>';
        }
      } else {
        $register_text = 'Please <a href="'.$base_path.'user/login">Login</a> to register.';
      }
    }

    return [
      '#theme' => 'covid_register',
      '#covid_nid' => $covid_nid,
      '#register_link' => $register_link,
      '#register_text' => $register_text,
      '#attached' => [
        'library' => [
          'covid_custom_module/covid_custom_library'
        ],
      ],
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return 0;
  }

}
