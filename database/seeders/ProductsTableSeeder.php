<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = [
            'name' => 'phone',
            'price' => 150,
            'image' => 'uploads/products/book.png',
            'description' => 'Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus',

        ];
        $p2 = [
            'name' => 'laptop',
            'price' => 500,
            'image' => 'uploads/products/book.png',
            'description' => 'Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus',

        ];
        $p3 = [
            'name' => 'trouser',
            'price' => 20,
            'image' => 'uploads/products/book.png',
            'description' => 'Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus',

        ];
        $p4 = [
            'name' => 'shirt',
            'price' => 5,
            'image' => 'uploads/products/book.png',
            'description' => 'Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus',

        ];
        $p5 = [
            'name' => 'chair',
            'price' => 70,
            'image' => 'uploads/products/book.png',
            'description' => 'Duplexque isdem diebus acciderat malum, quod et Theophilum insontem atrox interceperat casus',

        ];

        Product::create($p1);
        Product::create($p2);
        Product::create($p3);
        Product::create($p4);
        Product::create($p5);
    }
}
