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
$x  =   $data['cropX'] *100;
$y  =   $data['cropY'] *100;
$position = "object-position: $x`%`  $y`%` ";
$width = "width :".$data['width']."px";
$height= "height:".$data['height']."px";

$style = " $width ; $height; $position ";

$style ="style='$style'";

$src = $data['src'];
?>

<img src="<?php echo e($src); ?>" <?php echo $style; ?> /><?php /**PATH D:\www\ufala\resources\views/components/canva/image.blade.php ENDPATH**/ ?>