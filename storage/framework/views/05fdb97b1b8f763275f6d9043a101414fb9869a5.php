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

$width = "width :".$data['width']."px";
$height= "height:".$data['height']."px";
$fill  =  array_values($data['colorsReplace']);
$bgColor= "background-color:".$fill[0] ;
$mask  = "-webkit-mask-image: url(".$data['src']."); mask-image:url(".$data['src'].")";  
$style = " $width ; $height; $bgColor ; $mask ";

$style ="style='$style'";
?>
<div <?php echo $style; ?>>

</div><?php /**PATH D:\www\ufala\resources\views/components/canva/svg.blade.php ENDPATH**/ ?>