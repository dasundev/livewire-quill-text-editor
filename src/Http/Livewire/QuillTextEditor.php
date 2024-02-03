<?php

declare(strict_types=1);

namespace Dasundev\LivewireQuillTextEditor\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class QuillTextEditor extends Component
{
    #[Modelable]
    public string | null $value = '';

    #[Locked]
    public string $quillId;

    public string $theme;

    public function mount(string $theme = 'snow'): void
    {
        $this->theme = $theme;
        $this->quillId = 'ql-editor-'.Str::uuid()->toString();
    }

    public function updatedValue($value): void
    {
        $this->value = $value;
    }

    public function render(): View
    {
        return view('livewire-quill-text-editor::livewire.quill-text-editor');
    }
}
