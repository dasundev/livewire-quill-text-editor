<?php

namespace Dasundev\LivewireQuillTextEditor\Tests;

use Dasundev\LivewireQuillTextEditor\LivewireQuillTextEditorServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            LivewireQuillTextEditorServiceProvider::class,
        ];
    }
}
