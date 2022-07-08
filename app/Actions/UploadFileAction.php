<?php

namespace App\Actions;

use Illuminate\Http\UploadedFile;

class UploadFileAction
{

    public function execute(UploadedFile $file, $path)
    {
        return $file->store($path);
    }
}
