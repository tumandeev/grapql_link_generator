<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

class CreateShortLink
{
    /** @param  array{}  $args */
    public function __invoke($_, array $args)
    {
        dd($args);
    }
}
