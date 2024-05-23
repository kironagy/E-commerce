<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Users extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::all()->count())
            ->description('All Users')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Products', Product::all()->count())
            ->description('All Products')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Categories', Category::all()->count())
            ->description('All Categories')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
