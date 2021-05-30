<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use ZipArchive;
use File;

class ImageController extends Controller
{
    public function resizeImage()
    {
        return view('images.resize');
    }

    public function resizeImageStore(Request $request)
    {
        $image = $request->file;
        $fileName = time() . $image->getClientOriginalName();
        $imageResize = Image::make($image->getRealPath())->resize(300, 300)->save(public_path('images/' . $fileName));
        return 'Image has been resized successfully.';
    }

    public function dropzone()
    {
        return view('images.dropzone');
    }

    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        $fileName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $fileName);
        return response()->json(['success' => $fileName]);
    }

    public function gallery()
    {
        return view('images.gallery');
    }

    public function zipFile()
    {
        $zip = new ZipArchive();
        $fileName = 'test.zip';
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            $files = File::files(public_path('files'));
            foreach ($files as $file) {
                $relativeNameInZipFile = basename($file);
                $zip->addFile($file, $relativeNameInZipFile);
            }
            $zip->close();
        }
        return response()->download(public_path($fileName));
    }
}
