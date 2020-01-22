<?php

namespace LaTevaWeb\TinyMCE;

use Illuminate\Http\Request;

class UploadMediaController
{
    /**
     * Handle image upload from TinyMCE file browser window
     *
     * @param Request $request
     */
    public function upload(Request $request)
    {
        $uploadMediaService = config('tinymce-upload-media.services.upload_media_service');
        return $uploadMediaService::upload($request);
    }
}