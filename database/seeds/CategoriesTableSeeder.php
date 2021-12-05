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
        //        Đồ đồng cao cấp - có id = 2
        $m = Category::create([
            'name' => 'Đồ đồng cao cấp',
            'slug' => str_slug('Đồ đồng cao cấp'),
            'order' => 0,
            'parent' => 0
        ]);

        Category::create([
            'name' => 'Đồ đồng khảm ngũ sắc',
            'slug' => str_slug('Đồ đồng khảm ngũ sắc'),
            'order' => 0,
            'parent' => $m->id
        ]);

        Category::create([
            'name' => 'Lư hương, lọ lộc bình',
            'slug' => str_slug('Lư hương, lọ lộc bình'),
            'order' => 1,
            'parent' => $m->id
        ]);

        Category::create([
            'name' => 'Quà tặng quân sự mạ vàng',
            'slug' => str_slug('Quà tặng quân sự mạ vàng'),
            'order' => 2,
            'parent' => $m->id
        ]);
        //Đồ đồng phong thủy
        $t = Category::create([
            'name' => 'Đồ đồng phong thủy',
            'slug' => str_slug('Đồ đồng phong thủy'),
            'order' => 1,
            'parent' => 0
        ]);

        Category::create([
            'name' => 'Phong thuỷ 12 con giáp',
            'slug' => str_slug('Phong thuỷ 12 con giáp'),
            'order' => 0,
            'parent' => $t->id
        ]);

        Category::create([
            'name' => 'Vật phẩm phong thuỷ',
            'slug' => str_slug('Vật phẩm phong thuỷ'),
            'order' => 1,
            'parent' => $t->id
        ]);

        // Đồ đồng quà tặng
        $l = Category::create([
            'name' => 'Đồ đồng quà tặng',
            'slug' => str_slug('Đồ đồng quà tặng'),
            'order' => 2,
            'parent' => 0
        ]);

        Category::create([
            'name' => 'Quà tặng bằng đồng',
            'slug' => str_slug('Quà tặng bằng đồng'),
            'order' => 0,
            'parent' => $l->id
        ]);

        Category::create([
            'name' => 'Quà tặng quân sự',
            'slug' => str_slug('Quà tặng quân sự'),
            'order' => 1,
            'parent' => $l->id
        ]);

        // Đồ thờ bằng đồng
        $ac= Category::create([
            'name' => 'Đồ thờ bằng đồng',
            'slug' => str_slug('Đồ thờ bằng đồng'),
            'order' => 3,
            'parent' => 0
        ]);

        Category::create([
            'name' => 'Bát hương',
            'slug' => str_slug('Bát hương'),
            'order' => 0,
            'parent' => $ac->id
        ]);

        Category::create([
            'name' => 'Bộ tam sự, ngũ sự',
            'slug' => str_slug('Bộ tam sự, ngũ sự'),
            'order' => 1,
            'parent' => $ac->id
        ]);

        Category::create([
            'name' => 'Chân nến đồng',
            'slug' => str_slug('Chân nến đồng'),
            'order' => 2,
            'parent' => $ac->id
        ]);

        Category::create([
            'name' => 'Đài thờ',
            'slug' => str_slug('Đài thờ'),
            'order' => 3,
            'parent' => $ac->id
        ]);
        Category::create([
            'name' => 'Đèn thờ',
            'slug' => str_slug('Đèn thờ'),
            'order' => 3,
            'parent' => $ac->id
        ]);
        Category::create([
            'name' => 'Đỉnh đồng',
            'slug' => str_slug('Đỉnh đồng'),
            'order' => 3,
            'parent' => $ac->id
        ]);
        Category::create([
            'name' => 'Hạc thờ bằng đồng',
            'slug' => str_slug('Hạc thờ bằng đồng'),
            'order' => 3,
            'parent' => $ac->id
        ]);
        Category::create([
            'name' => 'Ống cắm hương',
            'slug' => str_slug('Ống cắm hương'),
            'order' => 3,
            'parent' => $ac->id
        ]);
        Category::create([
            'name' => 'Mâm bồng',
            'slug' => str_slug('Mâm bồng'),
            'order' => 3,
            'parent' => $ac->id
        ]);
        // Tranh đồng
        Category::create([
            'name' => 'Tranh đồng',
            'slug' => str_slug('Tranh đồng'),
            'order' => 4,
            'parent' => $accessories->id
        ]);
    }
}
