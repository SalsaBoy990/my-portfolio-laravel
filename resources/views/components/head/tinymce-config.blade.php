<script src="{{ asset('/build/assets/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#text-editor-tiny-cme', // This textarea needs to have the TinyMCE editor
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });

  tinymce.init({
    selector: 'textarea#skill-content-editor', // This textarea needs to have the TinyMCE editor
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });

  tinymce.init({
    selector: 'textarea#project-content-editor', // This textarea needs to have the TinyMCE editor
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });

  tinymce.init({
    selector: 'textarea#project-links-editor', // This textarea needs to have the TinyMCE editor
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
    extended_valid_elements : 'nav[class]'
    
  });
  
</script>