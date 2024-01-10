<?php

namespace Dasundev\LivewireQuillTextEditor\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class QuillTextEditor extends Component
{
    public function render(): View
    {
        return view('livewire-quill-text-editor::livewire.quill-text-editor');
    }
}
