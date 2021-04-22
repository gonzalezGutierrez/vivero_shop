<?php


namespace App\Repositories\Admin\Products;


class ProductHelper
{

    public static $FIELDS_INDEX = [
        'id',
        'name',
        'slug',
        'price',
        'image_thumb_url',
        'stock',
        'min_purchases',
        'is_active_to_shop'
    ];

    public static $FIELDS_SHOP_LIST = [
        'products.id',
        'products.name',
        'products.image_thumb_url',
        'products.price',
        'products.slug',
        'products.stock',
        'products.min_purchases',
        'products.description',
        'products.category_id'
    ];

}
