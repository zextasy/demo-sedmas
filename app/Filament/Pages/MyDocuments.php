<?php

namespace App\Filament\Pages;

use App\Models\Document;
use Filament\Pages\Page;
use Filament\Tables\Actions\LinkAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;

class MyDocuments extends Page implements HasTable
{
    use InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Personal';

    protected static string $view = 'filament.pages.my-test-results';

    public function getTableQuery(): Builder
    {
        return Document::query();
    }

    protected function getTableColumns(): array
    {
        return [
            BadgeColumn::make('status')
                ->label('Result status')->sortable(),
            TextColumn::make('reference')->sortable(),
            TextColumn::make('created_at')
                ->label('Date')
                ->date()
                ->sortable(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            LinkAction::make('View')
                ->url(fn (Document $record): string => $record->filament_url)
                ->hidden(fn (Document $record): bool => $record->user()->doesntExist()),
        ];
    }
}
