<?php

namespace App\Http\Livewire\Forms\Filament;

use App\Models\Document;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class DocumentDisplay extends Component implements HasForms
{
    use InteractsWithForms;

    public Document $document;

    public function mount(): void
    {
        $this->form->fill([
            'reference' => $this->document->reference,
            'customer_email' => $this->document->customer_email,
            'customer_phone_number' => $this->document->customer_phone_number,
            'result_image' => $this->document->testType->name,
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Fieldset::make('General Info')->schema([
                TextInput::make('reference')
                    ->disabled(),
                TextInput::make('customer_email')
                    ->placeholder('')
                    ->disabled(),
                TextInput::make('customer_phone_number')
                    ->placeholder('')
                    ->disabled(),
            ])->columns(3),
            Fieldset::make('Result')->schema([

            ])->columns(1),
        ];
    }

    public function render()
    {
        return view('livewire.forms.filament.document-display');
    }
}
