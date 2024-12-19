<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\ModuleTemplate\ProductVote\Dao;

use OxidEsales\ModuleTemplate\ProductVote\DataObject\VoteResultInterface;

interface VoteResultDaoInterface
{
    public function getProductVoteResult(string $productId): VoteResultInterface;
}
