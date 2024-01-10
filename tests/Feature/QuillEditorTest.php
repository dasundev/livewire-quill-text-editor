<?php

use Dasundev\LivewireQuillTextEditor\Http\Livewire\QuillTextEditor;

it('renders successfully', function () {
    Livewire\Livewire::test(QuillTextEditor::class)
        ->assertOk();
});

it('accepts and sets rules parameter correctly', function () {
    Livewire\Livewire::test(QuillTextEditor::class, ['theme' => 'foo'])
        ->assertSet('theme', 'foo');
});

it('display correct editor value', function () {
    Livewire\Livewire::test(QuillTextEditor::class)
        ->set('value', 'foo')
        ->assertSet('value', 'foo');
});
