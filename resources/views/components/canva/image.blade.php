@props([
'data'
])
@php

    $styleDefault = styleDefault($data);
    $style = styleImage($data,$styleDefault);
    $src = $data['src'];
@endphp

<img src="{{$src}}" {!!$style!!} />
