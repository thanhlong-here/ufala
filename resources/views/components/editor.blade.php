@props([
'id'=>uniqid('editor_'),
'mode'=>'simple',
'name'=>'content'
])

@push('script')
<script>
  editor = $('#{{$id}} textarea');
  editor.summernote({

    minHeight: 280, // set minimum height of editor
    maxHeight: null, // set maximum height of editor

    toolbar: [
      // [groupName, [list of button]]
      ['insert', ['link', 'picture', 'video']],
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['font', ['strikethrough', 'superscript', 'subscript']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']]
    ],
    popover: {
      image: [
        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
        ['float', ['floatLeft', 'floatRight', 'floatNone']],
        ['remove', ['removeMedia']]
      ],
    },

  });

  editor.summernote({
    callbacks: {
      onImageUpload: function(files, editor, welEditable) {
        data = new FormData();
        for (var x = 0; x < files.length; x++) {
          data.append("images[]", files[x]);
        }
        data.append("_token", "{{ csrf_token() }}");
        $.ajax({
          data: data,
          type: "POST",
          url: "{{ route('editor.imgupload') }}",
          cache: false,
          contentType: false,
          processData: false,

          success: function(urls) {
            if (urls.length > 0) {
              urls.filter(el => Object.keys(el).length).map((url) => {
                $('#{{$id}}').summernote('editor.insertImage', '{{asset("doc")}}/' + url);
              })
            }
          },
          error: function(xhr, status, error) {
            console.log(status + ': ' + error);
          }
        });
      }
    }
  });
</script>
@endpush
<div id="{{$id}}">
  <textarea {{ $attributes }} name="{{ $name }}">{{ $slot }}</textarea>
</div>