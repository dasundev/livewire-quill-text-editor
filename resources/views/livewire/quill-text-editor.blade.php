<div wire:ignore>
    <div id="{{ $quillId }}"></div>
</div>

@script
<script>
    let toolbarOptions = [
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'font': [] }],
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        [{ 'script': 'sub' }, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'align': [] }],

        ['image', 'video'],
        ['clean']                                         // remove formatting button
    ];

    const quill = new Quill('#' + @js($quillId), {
        modules: {
            toolbar: toolbarOptions
        },
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
