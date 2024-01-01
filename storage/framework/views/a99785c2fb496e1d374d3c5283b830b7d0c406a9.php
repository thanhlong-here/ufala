<?php
global $x_item;

?>
<?php if($x_item): ?>
<script>
  $.each(<?php echo json_encode($x_item, 15, 512) ?>, function(key, value) {
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
<?php endif; ?><?php /**PATH D:\www\ufala\resources\views/components/out.blade.php ENDPATH**/ ?>