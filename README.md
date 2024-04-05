<h1 align="center">Livewire Quill Text Editor</h1>

<p align="center">
    <a href="https://github.com/dasundev/filament-access-secret/actions"><img src="https://img.shields.io/github/actions/workflow/status/dasundev/livewire-quill-text-editor/tests.yml?label=tests" alt="Build Status"></a>
    <a href="https://packagist.org/packages/dasundev/livewire-quill-text-editor"><img src="https://img.shields.io/packagist/dt/dasundev/livewire-quill-text-editor" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/dasundev/livewire-quill-text-editor"><img src="https://img.shields.io/packagist/v/dasundev/livewire-quill-text-editor" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/dasundev/livewire-quill-text-editor"><img src="https://img.shields.io/packagist/l/dasundev/livewire-quill-text-editor" alt="License"></a>
</p>

## ✨ Introduction
A powerful livewire rich text editor component that build top of Quill.

> [!IMPORTANT]
> To use this package, you must have [Livewire 3](https://livewire.laravel.com/) installed.

## 📦 Installation
You can install the package via Composer:
```bash
composer require dasundev/livewire-quill-text-editor
```

Include the Quill theme and the library in your layout or specific view.
```html
<!-- Include Bubble Theme -->
<link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
```
For additional information, kindly refer to the [Quill documentation](https://quilljs.com/docs/quickstart/).

## 🎬 Showcase
Now you can use the text editor component as you like.
```html
<livewire:quill-text-editor
        wire:model.live="content"
        theme="bubble" />
```

## 🎨 Tailor UI
The text editor component is entirely customizable. Just publish the view file and make it your own.
```bash
php artisan vendor:publish --tag=livewire-quill-text-editor-views
```

## 🔄 Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## 🤝 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.
