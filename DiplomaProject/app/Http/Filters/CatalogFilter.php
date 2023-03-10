<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class CatalogFilter extends AbstractFilter
{
    public const TITLE = 'Title';
    public const CATEGORY = 'Category';
    //public const YEAR = 'Year';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::CATEGORY => [$this, 'category'],
            //self::CATEGORY_ID => [$this, 'categoryId'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('Title', 'like', "%{$value}%");
    }

    public function category(Builder $builder, $value)
    {
        $builder->where('Category', 'like', "%{$value}%");
    }

    /*public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }*/
}
