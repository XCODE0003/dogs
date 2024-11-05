<?php

namespace App\Http\Services;

//composer require intervention/image
use Image;
use Illuminate\Support\Facades\Storage;

class SaveFileServices
{
    public function saveOne($file, $url)
    {
        $name = time();
        $type = $file->getClientOriginalExtension();
        $file->move(public_path().$url, $name.".".$type);

        $link = $url."/".$name.".".$type;

        return $name.".".$type;
    }

    public function resize($path, $imgName, $width, $height)
    {
        if($path[0] === "/"){$path = substr($path,1);}

        $newName = "{$width}-{$height}-".$imgName;
        Image::make($path.$imgName)->resize($width, $height)->save($path.$newName);
        return $newName;
    }
}
