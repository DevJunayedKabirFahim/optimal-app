<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subCategory, $image, $imageName, $directory, $extension, $imageUrl;

    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$extension    = self::$image->getClientOriginalExtension();
        self::$imageName    = rand(0, 1000000).'.'.self::$extension;
        self::$directory    = 'upload/sub-category-images/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newSubCategory($request)
    {
        self::$subCategory              = new SubCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name        = $request->name;
        self::$subCategory->description = $request->description;
        self::$subCategory->image       = self::getImageUrl($request);
        self::$subCategory->status      = $request->status;
        self::$subCategory->save();
    }

    public static function updateSubCategory($request, $subCategory)
    {
        if ($request->file('image'))
        {
            if (file_exists($subCategory->image))
            {
                unlink($subCategory->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = $subCategory->image;
        }

        $subCategory->category_id = $request->category_id;
        $subCategory->name              = $request->name;
        $subCategory->description       = $request->description;
        $subCategory->image             = self::$imageUrl;
        $subCategory->status            = $request->status;
        $subCategory->save();
    }

    public static function deleteCategory($subCategory)
    {
        if (file_exists($subCategory))
        {
            unlink($subCategory->image);
        }
        $subCategory->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
