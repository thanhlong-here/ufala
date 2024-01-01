<?php
#region Style
if (!function_exists('styleDefault')) {
    function styleDefault($style=[])
    {
        $width = "width: ".$style['width'].'px';
        $height = "height: ".$style['height'].'px';
        $position = 'position : absolute';
        $left = 'left : ' . $style['x'] . 'px';
        $top = 'top : ' . $style['y'] . 'px';
        $style = " $width ; $height ; $position; $left; $top;";
        return $style;
    }
}
if (!function_exists('styleText')) {
    function styleText($style=[],$default='')
    {
        $fontSize = "font-size : " .$style['fontSize']."px";
        $fontFamily = "font-family : " .$style['fontFamily'];
        $fontWeight = "font-weight : ". $style['fontWeight'];
        $fontStyle = "font-style : " . $style['fontStyle'];
        $color = "color : ".$style['fill'];
        $align = "text-align : ".$style['align'];
        $stoke = " -webkit-text-stroke: ".$style['strokeWidth']."px ".$style['stroke'].";";
        $lineheight = "line-height : ".$style['lineHeight'];
        $style = " $default ; $fontSize ; $fontFamily ; $fontWeight; $color; $fontStyle; $lineheight; $stoke; $align";
        $style = "style=' $style '";
        return $style;
    }
}
if (!function_exists('styleSvg')) {
    function styleSvg($style=[],$default='',$width=0,$height=0)
    {
        $fill  =  array_values($style['colorsReplace']);
        $position = $left = $top = $box_shadow = $background_image = $rotation = $temp = $bgColor = $mask = '';
        if(!empty($fill)){
            $bgColor= "background:".$fill[0];
            if(!empty($fill['maskSrc'])){
                $mask  = "-webkit-mask-image: url(".$style['maskSrc']."); mask-image:url(".$style['maskSrc'].")";
            }
            if($style['blurEnabled'] == true){
                $box_shadow = "box-shadow: 1px 1px " . $style['blurRadius'] . "px ".$fill[0];
            }
            $mask  = "-webkit-mask-image: url(".$style['src']."); mask-image:url(".$style['src'].")";
        }
        else
            $background_image = "background-image: url(".$style['src'].")";
        $temp = "-webkit-mask-size: contain;";
        $rotation = "";
        if(!empty($style['rotation']))
            $rotation = "transform: rotate(".$style['rotation']."deg)";
//        $position = 'position : absolute';
//        if($style['width'] > $width){
//            $left = 'left : ' . ($style['x']+$style['width']-$width) . 'px!important';
//            $width = "width: ".$width.'px!important';
//        }
//        if($style['height'] > $height){
//            $top = 'top : ' . ($style['y'] + $style['height'] - $height) . 'px!important';
//            $height = "height: ".$height.'px!important';
//        }
        $style = " $width ; $height ; $position; $left; $top;";
        $style .= " $default ; $bgColor ; $mask ;$rotation; $temp; $background_image; $box_shadow";
        $style = "style=' $style '";
        return $style;
    }
}

if (!function_exists('styleImage')) {
    function styleImage($style=[],$default='')
    {
        $x  =   $style['cropX'] *100;
        $y  =   $style['cropY'] *100;
        $position = "object-position: $x`%`  $y`%` ";
        $style = " $default ; $position";
        $style = "style=' $style '";
        return $style;
    }
}

#endregion

#region Script
if (!function_exists('ScriptDefault')) {
    function ScriptDefault()
    {
        // handling ScriptDefault()
    }
}
#endregion

#region Script
if (!function_exists('saveImgBase64')) {
    function saveImgBase64($param, $folder)
    {
        list($extension, $content) = explode(';', $param);
        $tmpExtension = explode('/', $extension);
        preg_match('/.([0-9]+) /', microtime(), $m);
        $fileName = sprintf('img%s%s.%s', date('YmdHis'), $m[1], $tmpExtension[1]);
        $content = explode(',', $content)[1];
        $storage = Storage::disk('public');

        $checkDirectory = $storage->exists($folder);

        if (!$checkDirectory) {
            $storage->makeDirectory($folder);
        }

        $storage->put($folder . '/' . $fileName, base64_decode($content), 'public');

        return $fileName;
    }

}
#endregion
