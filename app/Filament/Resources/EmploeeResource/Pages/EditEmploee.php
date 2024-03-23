<?php

namespace App\Filament\Resources\EmploeeResource\Pages;

use App\Filament\Resources\EmploeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmploee extends EditRecord
{
    protected static string $resource = EmploeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
