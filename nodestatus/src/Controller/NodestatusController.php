<?php

declare(strict_types=1);

namespace Drupal\nodestatus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Nodestatus routes.
 */
final class NodestatusController extends ControllerBase {

  // /**
    //  * The custom service.
    //  *
    //  * @var \Drupal\custom_module\NodeStatusService
    //  */
    // protected $nodeStatusService;

    // /**
    //  * Constructs a new CustomController object.
    //  *
    //  * @param \Drupal\custom_module\NodeStatusService $nodeStatusService
    //  * The custom service.
    //  */
    // public function __construct(NodeStatusService $nodeStatusService)
    // {
    //     $this->nodeStatusService = $nodeStatusService;
    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public static function create(ContainerInterface $container)
    // {
    //     return new static(
    //         $container->get('batch_process_drush.nodestatus')
    //     );
    // }
    
  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $callService = \Drupal::service('nodestatus.publish');
    $review_data = $callService->doSomething();

    //print $review_data;exit;

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t($review_data),
    ];

    return $build;
  }

}
