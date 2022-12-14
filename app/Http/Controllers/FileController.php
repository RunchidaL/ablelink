<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FileController extends Controller {

    public function uploadImagedes(Request $request) {
        $filedes = $request->file('file');

        $originalNamedes = $filedes->getClientOriginalName();
        $fileNamedes = substr(hash_file('md5', $filedes), 0, 8) . '-' . $originalNamedes;
        $filedes->move('./upload', $fileNamedes);

        return [
            'url' => asset('/upload/' . $fileNamedes),
        ];
    }

    public function uploadImageover(Request $request) {
        $fileover = $request->file('file');

        $originalNameover = $fileover->getClientOriginalName();
        $fileNameover = substr(hash_file('md5', $fileover), 0, 8) . '-' . $originalNameover;
        $fileover->move('./upload', $fileNameover);

        return [
            'url' => asset('/upload/' . $fileNameover),
        ];
    }

    public function uploadImageapp(Request $request) {
        $fileapp = $request->file('file');

        $originalNameapp = $fileapp->getClientOriginalName();
        $fileNameapp = substr(hash_file('md5', $fileapp), 0, 8) . '-' . $originalNameapp;
        $fileapp->move('./upload', $fileNameapp);

        return [
            'url' => asset('/upload/' . $fileNameapp),
        ];
    }

    public function uploadImagefea(Request $request) {
        $filefea = $request->file('file');

        $originalNamefea = $filefea->getClientOriginalName();
        $fileNamefea = substr(hash_file('md5', $filefea), 0, 8) . '-' . $originalNamefea;
        $filefea->move('./upload', $fileNamefea);

        return [
            'url' => asset('/upload/' . $fileNamefea),
        ];
    }

    public function uploadImagedescription(Request $request) {
        $filedescription = $request->file('file');

        $originalNamedescription = $filedescription->getClientOriginalName();
        $fileNamedescription = substr(hash_file('md5', $filedescription), 0, 8) . '-' . $originalNamedescription;
        $filedescription->move('./upload', $fileNamedescription);

        return [
            'url' => asset('/upload/' . $fileNamedescription),
        ];
    }
}
