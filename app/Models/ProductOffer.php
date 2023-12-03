<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOffer extends Model
{
    use HasFactory;
    private static $productOffer, $image, $imageName, $extension, $directory, $imageUrl;
    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$extension    = self::$image->getClientOriginalExtension();
        self::$imageName    = rand(0, 500000).'.'.self::$extension;
        self::$directory    = 'uploads/category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProductOffer($request)
    {
        self::$productOffer = new ProductOffer();
        self::$productOffer->product_id     = $request->product_id;
        self::$productOffer->first_title    = $request->first_title;
        self::$productOffer->second_title   = $request->second_title;
        self::$productOffer->third_title    = $request->third_title;
        self::$productOffer->description    = $request->description;
        self::$productOffer->image          = self::getImageUrl($request);
        self::$productOffer->status         = $request->status;
        self::$productOffer->save();
    }
    public static function updateProductOffer($request, $productOffer)
    {
        if ($request->file('image'))
        {
            if (file_exists($productOffer->image))
            {
                unlink($productOffer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = $productOffer->image;
        }

        $productOffer->product_id     = $request->product_id;
        $productOffer->first_title    = $request->first_title;
        $productOffer->second_title   = $request->second_title;
        $productOffer->third_title    = $request->third_title;
        $productOffer->description    = $request->description;
        $productOffer->image          = self::$imageUrl;
        $productOffer->status         = $request->status;
        $productOffer->save();

    }
    public static function deleteProductOffer($productOffer)
    {
        if (file_exists($productOffer->image))
        {
            unlink($productOffer->image);
        }
        $productOffer->delete();
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
