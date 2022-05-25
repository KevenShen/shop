<?php
function get_media_path($media = '', $path = '')
{
    if (strtolower(substr($media, 0, 4)) == 'http') {
        $url = $media;
    } else {
        $url = config('app.url') . "storage" . $path . '/' . $media;
    }
    return $url;
}

function fileterUpload($mediaPath, $public)
{
    if (is_Array($mediaPath)) {
        if ($public) {
            foreach ($mediaPath as $v) {
                $data = str_replace("public", "storage", $mediaPath);
            }
        } else {
            foreach ($mediaPath as $v) {
                $data = str_replace("storage", "public",  $mediaPath);
            }
        }
        return $data;
    } else {
        if ($public) {
            $data = str_replace("public", "storage", $mediaPath);
        } else {
            $data = str_replace("storage", "public",  $mediaPath);
        }
        return $data;
    }
}
function isImage($filename)
{
}
