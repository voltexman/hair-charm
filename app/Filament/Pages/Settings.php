<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Cache;
use UnitEnum;

class Settings extends Page
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 5;

    protected static string|UnitEnum|null $navigationGroup = 'Параметри';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Налаштування';

    protected static ?string $title = 'Налаштування';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(Setting::first()?->toArray() ?? []);
    }

    public function form($form)
    {
        return $form
            ->schema([
                Section::make('Контактна інформація')
                    ->description('Основні дані для зв\'язку, що відображаються у футері та контактах')
                    ->aside()
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('email')
                                ->label('Email адреса')
                                ->email()
                                ->required(),

                            TextInput::make('phone')
                                ->label('Номер телефону')
                                ->tel()
                                ->regex('/^\+\d{3}\s\(\d{2}\)\s\d{3}-\d{2}-\d{2}$/')
                                ->validationMessages([
                                    'regex' => 'Номер має відповідати формату',
                                ])
                                ->mask('+999 (99) 999-99-99')
                                ->required(),
                        ]),
                    ]),

                Section::make('Соціальні мережі та месенджери')
                    ->description('Додайте посилання або номери телефонів')
                    ->aside()
                    ->collapsible()
                    ->persistCollapsed()
                    ->schema([
                        TextInput::make('socials.facebook')
                            ->label('Facebook')
                            ->placeholder('https://facebook.com')
                            ->prefixIcon(Heroicon::OutlinedGlobeAlt)
                            ->url(),

                        TextInput::make('socials.instagram')
                            ->label('Instagram')
                            ->placeholder('https://instagram.com')
                            ->prefixIcon(Heroicon::OutlinedGlobeAlt)
                            ->url(),

                        TextInput::make('socials.whatsapp')
                            ->label('WhatsApp')
                            ->placeholder('380991234567')
                            ->prefixIcon(Heroicon::OutlinedPhone),
                    ]),
            ])
            ->statePath('data');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Зберегти налаштування')
                ->action(fn () => $this->save()),
        ];
    }

    public function save(): void
    {
        Setting::updateOrCreate(['id' => 1], $this->form->getState());

        Cache::forget('settings');

        Notification::make()
            ->title('Налаштування збережено')
            ->success()
            ->send();
    }
}
