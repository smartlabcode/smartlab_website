
<!-- Summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>--}}

<!-- Codemirror scripts -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>

<!-- Scripts for Summernote -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>

{{--<style>--}}
    {{--.note-editable b, .note-editable strong { font-weight: bolder !important; }--}}
{{--</style>--}}

<!-- Summernote custom functions -->
<script>

    // initilize summernote
    $(document).ready(function() {
        $('#content').summernote({
            toolbar: [
                ['style', ['style']],
                ['text', ['bold', 'italic', 'underline', 'color', 'clear', 'strikethrough']],  // 'superscript', 'subscript'
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['size', ['fontsize']],
                ['font', ['fontname']],
                ['insert', ['picture', 'link', 'table', 'hr']],
                ['misc', ['undo', 'redo', 'fullscreen', 'help', 'codeview']]
            ],
            //fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Nunito', 'Courier New', 'Merriweather'],
            tabsize: 10,
                height: 380,
                dialogsInBody: true,
                dialogsFade: true,
                callbacks:{
                    onInit:function(){
                        $('body > .note-popover').hide();
                    }
                },
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
                focus: true
        });

        //$('#content').summernote('fontName', 'Arial');
    });

    // wait for Summernote to be created and then set blog text value in it
    setTimeout(function() {

        let container = document.getElementsByClassName('note-editable')[0];

        let text = document.getElementById("contentText");
        container.innerHTML = text.value;

        var loader = document.getElementById("loaderContainer");
        loader.parentNode.removeChild(loader);

    }, 2000);

</script>
