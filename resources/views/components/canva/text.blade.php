@props([
'data'
])
@php
$styleDefault = styleDefault($data);
$style = styleText($data,$styleDefault);
@endphp
<span {!!$style!!}>
    {{$data['text']}}
</span>
