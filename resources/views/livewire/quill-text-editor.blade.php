<div wire:ignore>
    <div id="{{ $quillId }}"></div>
</div>

@script
<script>
    const quill = new Quill('#' + @js($quillId), {
        theme: @js($theme)
    });
    
    quill.root.innerHTML = $wire.get('value');
    
    let timeout = null;

    function handleTextChange() {
        if (timeout !== null) {
            clearTimeout(timeout);
        }

        timeout = setTimeout(function() {
            let value = quill.root.innerHTML;
            @this.set('value', value);
        }, 1000);
    }

    quill.on('text-change', function() {
        handleTextChange();
    });

    quill.on('selection-change', function() {
        if (quill.hasFocus()) {
            handleTextChange();
        }
    });
</script>
@endscript
