<?php

namespace App\Models;


class Artikel
{
    private static $artikel_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "lorem afjhakjdf aidjf aksdjf  akldjf al;kdsjf asld;kjf asldkfj asl;kdjf adslk fjklasdjf lkasdjf  fasldkjf al;sdkjf laksd;fj alsdkjf asldkfj asdlkjf lksdafj saldkfj asldkjf asldkjf ldksajf askldfj  falsdkjlasldkjf  alkdf laksdjf  fsda"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "lorem afjhakjdf aidjf aksdjf  akldjf al;kdsjf asld;kjf asldkfj asl;kdjf adslk fjklasdjf lkasdjf  fasldkjf al;sdkjf laksd;fj alsdkjf asldkfj asdlkjf lksdafj saldkfj asldkjf asldkjf ldksajf askldfj  falsdkjlasldkjf  alkdf laksdjf  fsda"
        ]
    ];

    public static function all()
    {
        return collect(self :: $artikel_posts);
    }

    public static function find($slug)
    {
        $artikels = static::all();
        // $artikel =  [];
        // foreach($artikels as $ar) {
        //     if ($ar["slug"] === $slug) {
        //         $artikel = $ar;
        //     }
        // }

        return $artikels->firstWhere('slug', $slug);
    }
}
