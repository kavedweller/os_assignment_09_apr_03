<?php


namespace models;
class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0 => [
                'id' => 1,
                'name' => "World affairs",
                'description' => "World news"
            ],
            1 => [
                'id' => 2,
                'name' => "Politics",
                'description' => "Local and International Politics"
            ],
            2 => [
                'id' => 3,
                'name' => "Economics",
                'description' => "World Economics"
            ],
            3 => [
                'id' => 4,
                'name' => "Technology",
                'description' => "Technology news"
            ]
        ];
    }


    public function getAllCategoryNames()
    {
        return $this->categories;
//        echo 'category';
    }


    public function getCategoryById($id)
    {
        foreach ($this->categories as $category)
        {
            if ($category['id'] == $id)
            {
                return $category;
            }
        }

    }
}