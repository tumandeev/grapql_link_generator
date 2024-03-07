<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\ShortLink;

class CreateShortLink
{
    /** @param  array{}  $args */
    public function __invoke($_, array $args)
    {
        $symbolAliases = [
            'q', 'W', 'e', 'r', 'T', 'y', 'Y', 'g', 'f', 'd', 'A', 'n', 'l', 'C', 'Z'
        ];

        $time = (string)time();
        $count = iconv_strlen($time);

        $linkAlias = "";

        for($i = 0; $i < $count; $i++){
            $linkAlias .= $symbolAliases[$time[$i]];
        }
        $linkAlias = str_shuffle($linkAlias);
        ShortLink::create([
            'link' => $args['link'],
            'alias' => $linkAlias,
        ]);

        return [
            'status' => true,
            'message' => null,
            'link' => $args['link'],
            'short_link' => url('/') . "/$linkAlias",
        ];
    }
}
