<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // tạo 1 record theo ý mình
        // "Không thuộc chuyên mục nào" có id = 1
        Category::create([
            'name'  =>  'Uncategorized',
            'slug' =>  'uncategorized',
            'order'  =>  0,
            'parent' => 0,
        ]);

        // Tạo 50 cái mẫu, cấu hình ở file ModelFactory.php
//        factory(Category::class, 50)->create();

        /* Tạo cái khác, có ý nghĩa hơn */
        //        Điện thoại - có id = 2
        $mobile = Category::create([
            'name' => 'Điện thoại',
            'slug' => str_slug('Điện thoại'),
            'order' => 0,
            'parent' => 0
        ]);

        Category::create([
            'name' => 'Điện thoại Apple',
            'slug' => str_slug('Điện thoại Apple'),
            'order' => 0,
            'parent' => $mobile->id
        ]);

        Category::create([
            'name' => 'Điện thoại Samsung',
            'slug' => str_slug('Điện thoại Samsung'),
            'order' => 1,
            'parent' => $mobile->id
        ]);

        Category::create([
            'name' => 'Điện thoại HTC',
            'slug' => str_slug('Điện thoại HTC'),
            'order' => 2,
            'parent' => $mobile->id
        ]);

        Category::create([
            'name' => 'Điện thoại LG',
            'slug' => str_slug('Điện thoại LG'),
            'order' => 3,
            'parent' => $mobile->id
        ]);

//        Máy tính bảng - 7
        $tablet = Category::create([
            'name' => 'Máy tính bảng',
            'slug' => str_slug('Máy tính bảng'),
            'order' => 1,
            'parent' => 0
        ]);

        Category::create([
            'name' => 'Máy tính bảng Apple',
            'slug' => str_slug('Máy tính bảng Apple'),
            'order' => 0,
            'parent' => $tablet->id
        ]);

        Category::create([
            'name' => 'Máy tính bảng Samsung',
            'slug' => str_slug('Máy tính bảng Samsung'),
            'order' => 1,
            'parent' => $tablet->id
        ]);

        Category::create([
            'name' => 'Máy tính bảng HTC',
            'slug' => str_slug('Máy tính bảng HTC'),
            'order' => 2,
            'parent' => $tablet->id
        ]);

        Category::create([
            'name' => 'Máy tính bảng LG',
            'slug' => str_slug('Máy tính bảng LG'),
            'order' => 3,
            'parent' => $tablet->id
        ]);

//        Laptop - 12
        $laptop = Category::create([
            'name' => 'Laptop',
            'slug' => str_slug('Laptop'),
            'order' => 2,
            'parent' => 0
        ]);

        Category::create([
            'name' => 'Laptop Apple',
            'slug' => str_slug('Laptop Apple'),
            'order' => 0,
            'parent' => $laptop->id
        ]);

        Category::create([
            'name' => 'Laptop Samsung',
            'slug' => str_slug('Laptop Samsung'),
            'order' => 1,
            'parent' => $laptop->id
        ]);

        Category::create([
            'name' => 'Laptop Sony',
            'slug' => str_slug('Laptop Sony'),
            'order' => 2,
            'parent' => $laptop->id
        ]);

//        Phụ kiện - 16
        $accessories = Category::create([
            'name' => 'Phụ kiện',
            'slug' => str_slug('Phụ kiện'),
            'order' => 3,
            'parent' => 0
        ]);

        Category::create([
            'name' => 'Phụ kiện Apple',
            'slug' => str_slug('Phụ kiện Apple'),
            'order' => 0,
            'parent' => $accessories->id
        ]);

        Category::create([
            'name' => 'Phụ kiện Samsung',
            'slug' => str_slug('Phụ kiện Samsung'),
            'order' => 1,
            'parent' => $accessories->id
        ]);

        Category::create([
            'name' => 'Phụ kiện HTC',
            'slug' => str_slug('Phụ kiện HTC'),
            'order' => 2,
            'parent' => $accessories->id
        ]);

        Category::create([
            'name' => 'Phụ kiện LG',
            'slug' => str_slug('Phụ kiện LG'),
            'order' => 3,
            'parent' => $accessories->id
        ]);
        // thằng cuối cùng này có id = 21
        Category::create([
            'name' => 'Phụ kiện Sony',
            'slug' => str_slug('Phụ kiện Sony'),
            'order' => 4,
            'parent' => $accessories->id
        ]);
    }
}
