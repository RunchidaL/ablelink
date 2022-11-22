<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FileController extends Controller {

    public function uploadImage(Request $request) {
        $file = $request->file('file');

        $originalName = $file->getClientOriginalName();
        $fileName = substr(hash_file('md5', $file), 0, 8) . '-' . $originalName;
        $file->move('./upload', $fileName);

        return [
            'url' => asset('/upload/' . $fileName),
        ];
    }

}
