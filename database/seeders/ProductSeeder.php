<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [   'name' => 'Ivory Lace Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/h25.jpg',
                'image2'=> 'images/h26.jpg',
            ],

            [   'name' => 'Women Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/w3.jpg',
                'image2'=> 'images/w4.jpg',
            ],

            [   'name' => 'Ivory Lace Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/w5.jpg',
                'image2'=> 'images/w6.jpg',
            ],

            [   'name' => 'Ivory Lace Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/w7.jpg',
                'image2'=> 'images/w8.jpg',
            ],

            [   'name' => 'Ivory Lace Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/w9.jpg',
                'image2'=> 'images/w10.jpg',
            ],

            [   'name' => 'Ivory Lace Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/w11.jpg',
                'image2'=> 'images/w12.jpg',
            ],

            [   'name' => 'Ivory Lace Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/w13.jpg',
                'image2'=> 'images/w14.jpg',
            ],

            [   'name' => 'Ivory Lace Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/w15.jpg',
                'image2'=> 'images/w16.jpg',
            ],

            [   'name' => 'Ivory Lace Dress',
                'description' => 'Short Wedding Dress',
                'catalogId' => 'CA01',
                'price' => 99,
                'stock' => 10,
                'color' => 'black',
                'image1'=> 'images/w17.jpg',
                'image2'=> 'images/w18.jpg',
            ],
            [   'name' => 'Tuxedo Shirt French',
                'description' => 'Tuxedo Shirt',
                'catalogId' => 'CA02',
                'price' => 45.55,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/h13.jpg',
                'image2'=> 'images/h14.jpg',
            ],
            [   'name' => 'Men is Long-Sleeve',
                'description' => 'Sweater',
                'catalogId' => 'CA02',
                'price' => 34.50,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/h15.jpg',
                'image2'=> 'images/h16.jpg',
            ],
            [   'name' => 'Bracelet',
                'description' => 'Accessories, gifts',
                'catalogId' => 'CA03',
                'price' => 12.5,
                'stock' => 10,
                'color' => 'Grey',
                'image1'=> 'images/h17.jpg',
                'image2'=> 'images/h18.jpg',
            ],
            [   'name' => 'Shearling Bowling Bag, Violet',
                'description' => 'Women Bags',
                'catalogId' => 'CA03',
                'price' => 49.30,
                'stock' => 10,
                'color' => 'Purple',
                'image1'=> 'images/tx1.jpg',
                'image2'=> 'images/tx2.jpg',
            ],
            [   'name' => 'Embossed Leather Long Wallet - Navy',
                'description' => 'Men Bags',
                'catalogId' => 'CA03',
                'price' => 85.20,
                'stock' => 10,
                'color' => 'Blue',
                'image1'=> 'images/tx3.jpg',
                'image2'=> 'images/tx4.jpg',
            ],

            [   'name' => 'Pink Tie Dye Halter Neck Maxi Dress',
                'description' => 'Short Dress',
                'catalogId' => 'CA01',
                'price' => 331,
                'stock' => 10,
                'color' => 'Pink',
                'image1'=> 'images/h38.jpg',
                'image2'=> 'images/h37.jpg',
            ],

            [   'name' => 'Aqua Tie Dye Ruffled Square Neck Dress',
                'description' => 'Short Dress',
                'catalogId' => 'CA01',
                'price' => 76.50,
                'stock' => 10,
                'color' => 'Blue',
                'image1'=> 'images/h35.jpg',
                'image2'=> 'images/h36.jpg',
            ],

            [   'name' => 'Pink High Neck Puff Sleeve Midi Dress',
                'description' => 'Short Dress',
                'catalogId' => 'CA01',
                'price' => 78.50,
                'stock' => 10,
                'color' => 'Purple',
                'image1'=> 'images/h39.jpg',
                'image2'=> 'images/h40.jpg',
            ],

            [   'name' => 'Mint Green Strappy Tiered Midi Dress',
                'description' => 'Short Dress',
                'catalogId' => 'CA01',
                'price' => 51.50,
                'stock' => 10,
                'color' => 'Green',
                'image1'=> 'images/h41.jpg',
                'image2'=> 'images/h42.jpg',
            ],

            [   'name' => 'Stripe Paisley Printed Shirred Bodice Midi Dress',
                'description' => 'Womens Dress',
                'catalogId' => 'CA01',
                'price' => 29.40,
                'stock' => 10,
                'color' => 'Purple, Black',
                'image1'=> 'images/w11.jpg',
                'image2'=> 'images/w12.jpg',
            ],

            [   'name' => 'Green Satin Twist Neck Midi Dress',
                'description' => 'Short Dress',
                'catalogId' => 'CA01',
                'price' => 48.99,
                'stock' => 10,
                'color' => 'Dark blue',
                'image1'=> 'images/w15.jpg',
                'image2'=> 'images/w16.jpg',
            ],

            [   'name' => 'Shearling Bowling Bag, Violet',
                'description' => 'Women Bags',
                'catalogId' => 'CA03',
                'price' => 49.30,
                'stock' => 10,
                'color' => 'Purple',
                'image1'=> 'images/tx1.jpg',
                'image2'=> 'images/tx2.jpg',
        ],

            [   'name' => 'Shearling Bowling Bag, Violet',
                'description' => 'Women Bags',
                'catalogId' => 'CA03',
                'price' => 49.30,
                'stock' => 10,
                'color' => 'Purple',
                'image1'=> 'images/tx1.jpg',
                'image2'=> 'images/tx2.jpg',
    ],

            [   'name' => 'Shearling Bowling Bag, Violet',
                'description' => 'Women Bags',
                'catalogId' => 'CA03',
                'price' => 49.30,
                'stock' => 10,
                'color' => 'Purple',
                'image1'=> 'images/tx1.jpg',
                'image2'=> 'images/tx2.jpg',
],

            [   'name' => 'Shearling Bowling Bag, Violet',
                'description' => 'Women Bags',
                'catalogId' => 'CA03',
                'price' => 49.30,
                'stock' => 10,
                'color' => 'Purple',
                'image1'=> 'images/tx1.jpg',
                'image2'=> 'images/tx2.jpg',
],

            [   'name' => 'Shearling Bowling Bag, Violet',
                'description' => 'Women Bags',
                'catalogId' => 'CA03',
                'price' => 49.30,
                'stock' => 10,
                'color' => 'Purple',
                'image1'=> 'images/tx1.jpg',
                'image2'=> 'images/tx2.jpg',
],

            [   'name' => 'Shearling Bowling Bag, Violet',
                'description' => 'Women Bags',
                'catalogId' => 'CA03',
                'price' => 49.30,
                'stock' => 10,
                'color' => 'Purple',
                'image1'=> 'images/tx1.jpg',
                'image2'=> 'images/tx2.jpg',
            ],

            [   'name' => 'Shirt Men',
                'description' => 'Shirt',
                'catalogId' => 'CA02',
                'price' => 67.55,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/m11.jpg',
                'image2'=> 'images/m12.jpg',
            ],

            [   'name' => 'Shirt French',
                'description' => 'Tuxedo Shirt',
                'catalogId' => 'CA02',
                'price' => 56.55,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/m15.jpg',
                'image2'=> 'images/m16.jpg',
            ],

            [   'name' => 'Shirt French',
                'description' => 'Tuxedo Shirt',
                'catalogId' => 'CA02',
                'price' => 77.90,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/m17.jpg',
                'image2'=> 'images/m18.jpg',
            ],

            [   'name' => 'Shirt French',
                'description' => 'Tuxedo Shirt',
                'catalogId' => 'CA02',
                'price' => 99.55,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/m5.jpg',
                'image2'=> 'images/m6.jpg',
            ],

            [   'name' => 'Shirt French',
                'description' => 'Tuxedo Shirt',
                'catalogId' => 'CA02',
                'price' => 67.77,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/m7.jpg',
                'image2'=> 'images/m8.jpg',
            ],

            [   'name' => 'Shirt French',
                'description' => 'Tuxedo Shirt',
                'catalogId' => 'CA02',
                'price' => 88.55,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/m9.jpg',
                'image2'=> 'images/m10.jpg',
            ],

            [   'name' => 'Shirt French',
                'description' => 'Tuxedo Shirt',
                'catalogId' => 'CA02',
                'price' => 105.55,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/m15.jpg',
                'image2'=> 'images/m16.jpg',
            ],

            [   'name' => 'Shirt French',
                'description' => 'Tuxedo Shirt',
                'catalogId' => 'CA02',
                'price' => 75.55,
                'stock' => 10,
                'color' => 'White',
                'image1'=> 'images/m13.jpg',
                'image2'=> 'images/m14.jpg',
            ],
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
