<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand, $image, $imageName, $imageUrl, $directory, $extension;
    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(0, 50000).'.'.self::$extension;
        self::$directory = 'upload/brand-images/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image = self::getImageUrl($request);
        self::$brand->status = $request->status;
        self::$brand->save();
    }

    public static function updateBrand($request, $brand)
    {
        if ($request->file('image'))
        {
            if (file_exists($brand->image))
            {
                unlink($brand->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = $brand->image;
        }

        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->image = self::$imageUrl;
        $brand->status = $request->status;
        $brand->save();
    }

    public static function deleteBrand($brand)
    {
        if (file_exists($brand))
        {
            unlink($brand->image);
        }
        $brand->delete();
    }
}
