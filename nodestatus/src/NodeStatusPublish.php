<?php

declare(strict_types=1);

namespace Drupal\nodestatus;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * @todo Add class description.
 */
final class NodeStatusPublish {

  /**
   * Constructs a NodeStatusPublish object.
   */
  public function __construct(
    private readonly ContainerInterface $serviceContainer,
    private readonly EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * @todo Add method description.
   */
  public function doSomething() {
    // @todo Place your code here.
    return "Hello from Service";
  }

}
