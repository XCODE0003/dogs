<?php

namespace App\Http\Services;

//composer require intervention/image
use Image;
use Illuminate\Support\Facades\Storage;

class SaveFileServices
{
    public function saveOne($file, $url, $watermark = false)
    {
        $name = time();
        $type = $file->getClientOriginalExtension();
        $newName = $name . "." . $type;

        $file->move(public_path() . $url, $newName);

        // $link = $url.$name.".".$type;
        if($watermark === true || $watermark === "true")
        {
            $this->addWatermark($url, $newName);
        }

        return $newName;
    }

    public function resize($path, $imgName, $width, $height)
    {
        if ($path[0] === "/") {
            $path = substr($path, 1);
        }

        $newName = "{$width}-{$height}-" . $imgName;
        Image::make($path . $imgName)->resize($width, $height)->save($path . $newName);

        return $newName;
    }

    public function addWatermark($path, $name)
    {
        if ($path[0] === "/") {
            $path = substr($path, 1);
        }

        $imagePath = $path.$name;
        $watermarkPath = public_path('temple/watermark.png');

        $image = Image::make($imagePath);
        $watermark = Image::make($watermarkPath);

        // изменить прозрачность вотермарки
        $watermark->opacity(30);

        // вотермарку сделать на ширину и высоту картинки
        $watermark->resize(($image->width() - 15), ($image->height() - 15));

        $image->insert($watermark, 'center');

        // Сохраняем измененное изображение
        $image->save($imagePath);
    }
}
