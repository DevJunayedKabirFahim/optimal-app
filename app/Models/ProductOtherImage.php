<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOtherImage extends Model
{
    use HasFactory;
    private static $productOtherImage, $productOtherImages, $image, $imageName, $directory, $extension;

    private static function getImageUrl($image)
    {
        self::$extension    = $image->getClientOriginalExtension();
        self::$imageName    = rand(0, 100000).'.'.self::$extension;
        self::$directory    = 'upload/product-other-images/';
        $image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newProductOtherImage($images, $id)
    {
        foreach ($images as $image) {
            self::$productOtherImage = new ProductOtherImage();
            self::$productOtherImage->product_id   = $id;
            self::$productOtherImage->image        = self::getImageUrl($image);
            self::$productOtherImage->save();
        }
    }
    public static function updateProductOtherImage($images, $id)
    {
        self::$productOtherImages = ProductOtherImage::where('product_id', $id)->get();
        foreach (self::$productOtherImages as $productOtherImage) {
            if (file_exists($productOtherImage->image))
            {
                unlink($productOtherImage->image);
            }
            $productOtherImage->delete();
        }
        self::newProductOtherImage($images, $id);
    }
    public static function deleteProductOtherImage($id)
    {
        self::$productOtherImages = ProductOtherImage::where('product_id', $id)->get();
        foreach (self::$productOtherImages as $productOtherImage) {
            if (file_exists($productOtherImage->image))
            {
                unlink($productOtherImage->image);
            }
            $productOtherImage->delete();
        }
    }
}
