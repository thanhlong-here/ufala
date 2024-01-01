@props([
'data','width','height'
])
@php
    $styleDefault = styleDefault($data);
    $style = styleSvg($data,$styleDefault,$width,$height);
@endphp
<div {!!$style!!}>

</div>
