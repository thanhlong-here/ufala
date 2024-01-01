@php
global $x_item;

@endphp
@if($x_item)
<script>
  $.each(@json($x_item), function(key, value) {
    $('[xitem-id=' + key + ']').html(value);
  });


  $('.lazy').each(function(i) {
    var $this = $('.lazy').eq(i);
    $this.html($this.data('value'));

    var bg = $this.data('bg-img');
    if (typeof bg != 'undefined') {
      $this.css('background-image', 'url(' + bg + ')');
    }

  });

</script>
@endif