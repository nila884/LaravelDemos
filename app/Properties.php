<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable =['available','type','category','status','area'
    ,'rooms','bedrooms','bathrooms','description','price','address','city','image'
];
private $houseType;
private $houseCategory;
private const Type=[
0=>'House',
1=>'Business',
2=>'Officer'
];
private const Category=[
    0=>'To rent',
    1=>'For sale',
    ];

/**
* get Property categorie.
*
* @return string
*/

public function getHouseType($id): ?string
{
return self::Type[$id];
}
public function setHouseType($type)
{
    $this->houseType=$type;
}
public function getHouseCategory($id): ?string
{
return self::Category[$id];
}

public function setHouseCategory($category)
{
    $this->houseCategory=$category;

}


public function images()
{
return $this->hasMany('App\Images');
}

//
}
