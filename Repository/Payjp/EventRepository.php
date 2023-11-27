<?php
/**
 * This file is part of payjp4
 *
 * Copyright(c) Akira Kurozumi <info@a-zumi.net>
 *
 *  https://a-zumi.net
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\payjp4\Repository\Payjp;

use Eccube\Repository\AbstractRepository;
use Plugin\payjp4\Entity\Payjp\Event;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class EventRepository
 * @package Plugin\payjp4\Repository\Payjp
 */
class EventRepository extends AbstractRepository
{
    /**
     * WebhookRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }
}
