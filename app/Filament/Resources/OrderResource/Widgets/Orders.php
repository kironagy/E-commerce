<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\ChartWidget;
use Filament\Support\Colors\Color;

class Orders extends ChartWidget
{
    protected static ?string $heading = 'Orders';

    protected int | string | array $columnSpan = 'full';
    protected static ?string $maxHeight = '500px';


    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                'label' => 'Orders',
                'data' => [
                    Order::where('status', 'pending')->count(),
                    Order::where('status', 'under_shipping')->count(),
                    Order::where('status', 'delivered')->count()
                ],
                'backgroundColor' => ['#3778bc', '#FFBF00
                ', '#40baa5']
                ]

            ],
            'labels' => ['Pending', 'Under Shipping', 'Delivered']
        ];
    }
    

    protected function getType(): string
    {
        return 'doughnut';
    }
}
