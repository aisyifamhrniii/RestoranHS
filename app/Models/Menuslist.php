<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Menuslist {

    // protected $table = 'menulist';
    

    public static function all(){
        return [
            [
                
                'id' => '1',
                'slug' => 'steak-with-potatos-fried',
                'nama' => 'Steak with Potatos Fried',
                'harga' => 199.999,
                'igg' => '250gr Steak | Potato | Mushroom Sauce',
                'url' => 'https://i.pinimg.com/564x/e4/07/89/e4078908ab719d7e821a898a70da12fd.jpg',
            ],
            [
                'id' => '2',
                'slug' => 'steak-with-mashed-potato',
                'nama' => 'Steak with Mashed Potato',
                'harga' => 199.999,
                'igg' => '250gr Steak | Mashed Potato | Garlic Powder',
                'url' => 'https://i.pinimg.com/564x/95/4d/1b/954d1b473c2771c50949560e745fa0b8.jpg',
            ],
            [
                
                'id' => '3',
                'slug' => 'tenderloin-steak',
                'nama' => 'Tenderloin Steak',
                'harga' => 199.999,
                'igg' => '250gr Steak | Grill Vegetable | Pala Powder',
                'url' => 'https://i.pinimg.com/564x/8a/f1/ac/8af1ac3850f0794d34fe78a6850220d3.jpg',
            ],
            [
                'id' => '4',
                'slug' => 'steak-with-tar-tar-sauce-extra-potatos',
                'nama' => 'Steak with Tar-Tar Sauce Extra Potatos',
                'harga' => 199.999,
                'igg' => '250gr Steak | Tar-tar Sauce | Fried Potato | Mushroom',
                'url' => 'https://i.pinimg.com/564x/b7/0f/fc/b70ffcf7172d9e76492e60bb030f5054.jpg',
            ],
            [
                'id' => '5',
                'slug' => 'steak-with-chimicuri-sauce',
                'nama' => 'Steak with Chimicuri Sauce',
                'harga' => 199.999,
                'igg' => '250gr Steak | Potato | Chicimuri Sauce',
                'url' => 'https://i.pinimg.com/564x/df/5e/8d/df5e8deba37bfc503ce99779bed39925.jpg',
            ],
            [
                'id' => '6',
                'slug' => 'steak-and-barbeque',
                'nama' => 'Steak and Barbaque',
                'harga' => 199.999,
                'igg' => '100gr Steak | Sausage | Satai | Fried Potato | Spagethi | 3 Flavor Sauce | Vegetable',
                'url' => 'https://i.pinimg.com/564x/81/e1/9e/81e19ebdffe6194c3b36f52b7b091af8.jpg',
            ],
            [
                'id' => '7',
                'slug' => 'lamb-steak-with-barbeque-sauce',
                'nama' => 'Lamb Steak with Barbaque Sauce',
                'igg' => '5 Lamb Steak | Barbeque Sauce',
                'harga' => 199.999,
                'url' => 'https://i.pinimg.com/564x/6a/79/56/6a79569dfb16d49e29468babb27c001a.jpg',
            ],
            [
                'id' => '8',
                'slug' => 'lamb-steak-and-extra-vegetable',
                'nama' => 'Lamb Steak and Extra Vegetable',
                'harga' => 199.999,
                'igg' => '300gr Lamb Steak | Vegetables Soup',
                'url' => 'https://i.pinimg.com/564x/ce/25/20/ce252059554ef00b771968c12cecd3b2.jpg',
            ],
            [
                'id' => '9',
                'slug' => 'lamb-steak',
                'nama' => 'Lamb Steak',
                'harga' => 199.999,
                'igg' => '300gr Lamb Grill Steak',
                'url' => 'https://i.pinimg.com/564x/fe/ab/25/feab251eb47c915c67a751a42d2d9c90.jpg',
            ]
            ];
    }


    public static function find($slug): array{
        
        // return  Arr::first(static::all(), function($menu) use ($slug){
        //     return $menu['slug'] == $slug;
        // });

        //arrow function
       $menu=  Arr::first(static::all(),fn($menu) => $menu['slug'] == $slug);

        if(!$menu){
            abort(404);
        }
        return $menu;
    }
}
