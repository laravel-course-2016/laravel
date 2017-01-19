<?php namespace App\Classes;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Uploader
{  
    protected $file;
    
    public function upload(Request $request, $file)
    {
        if ($request->hasFile($file)) {
            if ($request->file($file)->isValid()) {
                $this->file = $request->file($file);
                $this->props['size'] = $size = $this->file->getSize();
                $this->props['oldname'] = $oldname = $this->file->getClientOriginalName();
                $this->props['ext'] = $ext = $this->file->getClientOriginalExtension();
                $this->props['mime'] = $mime = $this->file->getMimeType();
                $this->props['newname'] = $newname = sha1($oldname . microtime(true));
                $newdir = substr($newname, 0, 1) . '/' . substr($newname, 0, 3);
                $this->props['path'] = str_replace('/', '.', $newdir);
                $this->props['section'] = config('blog.storageSection');
                $this->props['newpath'] = $newpath = config('blog.storagePath') . '/' . config('blog.storageSection') . '/' . $newdir;

                if (!File::exists($newpath)) {
                    if (!File::makeDirectory($newpath, config('blog.storagePermissions'), true)) {
                        throw new \ErrorException('Can`t create directory ' . $newpath);
                    }
                }

                if (File::isDirectory($newpath) && File::isWritable($newpath)) {
                    $this->file->move($newpath, $newname);
                } else {
                    throw new \ErrorException('Directory ' . $newpath . ' not writable');
                }                
            } else {
                throw new \ErrorException('Upload of file "'. $filename .'" is not valid.');
            }
        }  else {
            throw new \ErrorException('Upload of file "'. $filename .'" return error.');
        }     
    }
}