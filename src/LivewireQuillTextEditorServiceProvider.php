<?php

declare(strict_types=1);

namespace Dasundev\LivewireQuillTextEditor;

use Dasundev\LivewireQuillTextEditor\Http\Livewire\QuillTextEditor;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireQuillTextEditorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-quill-text-editor')
            ->hasViews();
    }

    public function bootingPackage(): void
    {
        $this->registerLivewireComponent();
    }

    public function registerLivewireComponent(): void
    {
        Livewire::component('quill-text-editor', QuillTextEditor::class);
    }
}
