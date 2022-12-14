<?php

namespace Quanyu\MorphSku\Models;

use Quanyu\MorphSku\Contracts\OptionContract;
use Illuminate\Database\Eloquent\Model;

class Option extends Model implements OptionContract
{
    protected $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('morph-sku.table_names.options'));
    }

    public static function findByName(string $name)
    {
        return static::whereName($name)->first();
    }
}