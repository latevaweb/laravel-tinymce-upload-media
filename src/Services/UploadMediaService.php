<?php

namespace LaTevaWeb\TinyMCE\Services;

use Illuminate\Http\Request;

class UploadMediaService
{
    public static function upload(Request $request)
    {
        $image = $request->file('image');

        $filename = 'image_' . time() . '_' . $image->hashName();
        $image = $image->move(public_path('tinymce_uploads'), $filename);

        return response_tinymce($filename);
    }
}