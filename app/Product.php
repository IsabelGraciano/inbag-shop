<?php
/* Isabel Graciano Vasquez */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Item;
use App\Review;

class Product extends Model
{
    //attributes id, name, description, size, category, color, price, image, created_at, updated_at
    protected $fillable = ['name','description', 'size','category','color', 'price', 'activated', 'image'];

    public static function validate(Request $request){
        $request->validate([
            "name" => 'required',
            "description" => 'required',
            "size" => 'required',
            "category" => 'required',
            "color" => 'required',
            "price" => 'required|numeric',
            "activated" => 'required'|'numeric',
            "image" => 'mimes:jpeg,bmp,png,jpg'
        ]);
    }


    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }


    public function getSize()
    {
        return $this->attributes['size'];
    }

    public function setSize($size)
    {
        $this->attributes['size'] = $size;
    }

    public function getCategory()
    {
        return $this->attributes['category'];
    }

    public function setCategory($category)
    {
        $this->attributes['category'] = $category;
    }


    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }


    public function getColor()
    {
        return $this->attributes['color'];
    }

    public function setColor($color)
    {
        $this->attributes['color'] = $color;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }

    public function getActivated()
    {
        return $this->attributes['activated'];
    }

    public function setActivated($activated)
    {
        $this->attributes['activated'] = $activated;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function wishLists()
    {
        return $this->belongsToMany(WishList::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}