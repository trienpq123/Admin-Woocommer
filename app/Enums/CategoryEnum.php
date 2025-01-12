<?php
namespace App\Enums;

class CategoryEnum
{
    const CATEGORIES = [
        'product' => 'Sản phẩm',
        'service' => 'Dịch vụ',
    ];
    
    public static function getCategories()
    {
        return self::CATEGORIES;
    }
    
    public static function getCategoryName($type)
    {
        return self::CATEGORIES[$type];
    }
}
