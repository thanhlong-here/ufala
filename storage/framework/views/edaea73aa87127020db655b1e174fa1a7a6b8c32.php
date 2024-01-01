<?php $attributes = $attributes->exceptProps([
'data'
]); ?>
<?php foreach (array_filter(([
'data'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$width = "width:".$data['width'].'px';
$height = "height:".$data['height'].'px';
$fontSize = "font-size :" .$data['fontSize']."px";
$fontFamily = "font-family :" .$data['fontFamily'];
$fontWeight = "font-weight:". $data['fontWeight'];
$style = " $width ; $height ; $fontSize ; $fontFamily ; $fontWeight ";
$style = "style=' $style '";
?>
<span <?php echo $style; ?>>
    <?php echo e($data['text']); ?>

</span><?php /**PATH D:\www\ufala\resources\views/components/canva/text.blade.php ENDPATH**/ ?>