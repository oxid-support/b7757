<?php declare(strict_types=1);

namespace OxidSupport\B7757\Application\Controller\Admin;

class OrderMain extends OrderMain_parent
{
    public function render()
    {
        parent::render();

        return "@oxs_b7757/admin/order_main";
    }
}
