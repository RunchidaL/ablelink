<script src="https://cdn.tiny.cloud/1/xelo84km5tnufl5jdpdtwbi20vgqg8jrp4p0mgqefsi3hg3h/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<div class="container">
    <textarea id="con">
        Welcome to TinyMCE!
    </textarea>
</div>


@push('scripts')
<script>
    tinymce.init({
      selector: '#con',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
@endpush