<?php

namespace App\Queries\Order;

use App\Repositories\Order\OrderRepositoryInterface;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class OrdersQuery extends QueryBuilder
{
    public function __construct(?Request $request = null)
    {
        $orderRepository = resolve(OrderRepositoryInterface::class);

        $builder = $orderRepository->getBuilder()
            ->with([
                'customer',
                'discounts',
                'items'
            ]);

        parent::__construct($builder, $request);

        $this
            ->allowedSorts([
                'created_at'
            ])->allowedFilters([
                AllowedFilter::exact('id'),
            ]);
    }
}
