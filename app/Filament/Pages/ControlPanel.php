<?php

namespace App\Filament\Pages;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use Filament\Pages\Auth\EditProfile;
use Filament\Support\Enums\IconSize;
use Kanuni\FilamentCards\CardItem;
use Kanuni\FilamentCards\Enums\Alignment;
use Kanuni\FilamentCards\Filament\Pages\CardsPage;

class ControlPanel extends CardsPage
{
    protected static Alignment $itemsAlignment = Alignment::Start;

    protected static IconSize $iconSize = IconSize::Small;

    protected static bool|array $disableGroupsCollapse = ['Resources'];

    protected static ?string $navigationIcon = 'heroicon-o-cog-8-tooth';

    protected static function getCards(): array
    {
        return [
            CardItem::make('https://filamentphp.com/docs')
                ->title(__('Filament Documentation'))
                ->icon('heroicon-o-document-text')
                ->openInNewTab()
                ->group(__('Resources')),
            CardItem::make('https://laravel.com/docs')
                ->title(__('Laravel Documentation'))
                ->icon('heroicon-o-document-text')
                ->openInNewTab()
                ->group(__('Resources')),

            CardItem::make(EditProfile::class)
                ->title(__('Edit Profile'))
                ->icon('heroicon-o-user-circle')
                ->group(__('Settings')),

            CardItem::make(ListUsers::class)
                ->title(__('Manage Users'))
                ->description(__('List Users'))
                ->icon('heroicon-o-users')
                ->group(__('Users')),
            CardItem::make(CreateUser::class)
                ->title(__('Manage Users'))
                ->description(__('Create New User'))
                ->icon('heroicon-o-user-plus')
                ->group(__('Users')),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Control Panel');
    }

    public function getTitle(): string
    {
        return __('Control Panel');
    }
}
