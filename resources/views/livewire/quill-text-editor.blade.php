<div wire:ignore>
    <div id="{{ $quillId }}"></div>
</div>

@script
<script>
    const quill = new Quill('#' + @js($quillId), {
        theme: @js($theme)
    });
    
    quill.root.innerHTML = $wire.get('value');
    
    quill.on('text-change', function () {
        let value = quill.root.innerHTML;
        @this.set('value', value);
    });
</script>
@endscript
