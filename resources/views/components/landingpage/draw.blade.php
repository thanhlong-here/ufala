{{--<canvas id="myCanvas" width="500" height="300">--}}

{{--</canvas>--}}
{{--<script>--}}
{{--    var c = document.getElementById("myCanvas");--}}
{{--    var ctx=c.getContext("2d");--}}
{{--    let page = {!! json_encode($page,JSON_HEX_TAG) !!};--}}
{{--    switch(page['type']) {--}}
{{--        case 'text':--}}
{{--            Object.keys(page).map(function(objectKey, index) {--}}
{{--                switch(objectKey) {--}}
{{--                    case 'text':--}}
{{--                        ctx.beginPath();--}}
{{--                        ctx.fillStyle = page['fill'];--}}
{{--                        ctx.fontWeight = page['fontWeight'];--}}
{{--                        ctx.fontStyle = page['fontStyle'];--}}
{{--                        ctx.fontFamily = page['fontFamily'];--}}
{{--                        ctx.fontSize = page['fontSize'];--}}
{{--                        ctx.lineHeight = page['lineHeight'];--}}
{{--                        ctx.align = page['align'];--}}
{{--                        ctx.width = page['width'];--}}
{{--                        ctx.height = page['height'];--}}
{{--                        ctx.stroke = page['stroke'];--}}
{{--                        ctx.shadowBlur = page['shadowBlur'];--}}
{{--                        ctx.visible = page['visible'];--}}
{{--                        ctx.fillText(page['text'],{{@$page->x}},{{@$page->y}});--}}
{{--                        ctx.fill();--}}
{{--                        break;--}}
{{--                    case '':--}}
{{--                        // code block--}}
{{--                        break;--}}
{{--                    default:--}}
{{--                    // code block--}}
{{--                }--}}
{{--            });--}}
{{--            break;--}}
{{--        case 'image':--}}
{{--            // code block--}}
{{--            break;--}}
{{--        default:--}}
{{--        // code block--}}
{{--    }--}}
{{--</script>--}}
{{--<canvas id="myCanvas" width="500" height="300">--}}

{{--</canvas>--}}
<div class="box" style="border: 1px solid #181c20;">

    @if($page->type == 'text')
        <span id="{{$page->id}}">
            {{$page->text}}
        </span>
        @else
        <img id="{{$page->id}}" src="{{$page->src}}" alt="">
    @endif

</div>
<script>
    var elm = document.getElementById('{{$page->id}}');
    let page = {!! json_encode($page,JSON_HEX_TAG) !!};
        Object.keys(page).map(function(objectKey, index) {
            elm.style[objectKey] = page[objectKey];
        });
        elm.style.transform = 'translate('+page['x']+'px, '+page['y']+'px)';
        elm.style.color=page['fill'];
        elm.style.width=page['width']+'px';
        elm.style.height=page['height']+'px';
        elm.style.borderColor=page['borderColor'];
        elm.style.opacity=page['opacity'];
        elm.style.visible=page['visible'];
        elm.style.blurRadius=page['blurRadius'];
        elm.style.shadowBlur=page['shadowBlur'];
        elm.style.shadowColor=page['shadowColor'];
        elm.style.borderSize=page['borderSize'];
        elm.style.fill=page['colorsReplace'];
</script>
