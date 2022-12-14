<?php

namespace App\Http\Livewire\Tables\Filament;

use App\Models\TestBooking;
use App\Models\Document;
use App\Traits\Livewire\ManipulatesCustomerSession;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ListDocuments extends Component implements HasTable
{
    use LivewireAlert, InteractsWithTable, ManipulatesCustomerSession;

    public Document $document;

    protected function getTableQuery(): Builder
    {
        return Document::query()->with(['testBooking']); //->where('patient_id', $this->patientId)
    }

    protected function getTableColumns(): array
    {
        return [
            BadgeColumn::make('status')
                ->label('Booking status'),
            TextColumn::make('reference'),
            TextColumn::make('testBooking.testType.name')->wrap(),
            TextColumn::make('due_date')
                ->label('Booked for')
                ->date(),
            //            TextColumn::make('latestSpecimenSample.created_at')
            //                ->label('Sample collected on')
            //                ->date(),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('view')
                ->url(fn (Document $record): string => route('frontend.test-results.show', $record->id)),
        ];
    }

    public function render()
    {
        return view('livewire.tables.filament.list-documents');
    }
}
