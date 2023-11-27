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

namespace Plugin\payjp4\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\payjp4\Entity\Config;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class ConfigRepository
 * @package Plugin\payjp4\Repository
 */
class ConfigRepository extends AbstractRepository
{
    /**
     * ConfigRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Config::class);
    }

    /**
     * @param int $id
     *
     * @return null|Config
     */
    public function get($id = 1)
    {
        return $this->find($id);
    }
}
