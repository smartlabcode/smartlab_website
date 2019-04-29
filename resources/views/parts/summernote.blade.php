
<!-- Summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js" defer></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<!-- Codemirror scripts -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>

<!-- Scripts for Summernote -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>

<!-- Summernote custom functions -->
<script>

    // initilize summernote
    $(document).ready(function() {
        $('#content').summernote({
            tabsize: 10,
            height: 380,
            dialogsInBody: true,
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
