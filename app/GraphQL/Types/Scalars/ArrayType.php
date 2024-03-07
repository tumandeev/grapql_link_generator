<?php
declare(strict_types=1);

namespace App\GraphQL\Types\Scalars;

use GraphQL\Language\AST\Node;
use GraphQL\Type\Definition\ScalarType;
use Illuminate\Support\Carbon;


class ArrayType extends ScalarType
{
    protected function format(Carbon $carbon): string
    {
        return $carbon->toDateString();
    }

    protected function parse(mixed $value)
    {
        // @phpstan-ignore-next-line We know the format to be good, so this can never return `false`
        return $value;
    }

    public function serialize($value)
    {
        return $value;
    }

    public function parseValue($value)
    {
        // TODO: Implement parseValue() method.
        return $value;
    }

    public function parseLiteral(Node $valueNode, array $variables = null)
    {
        return $valueNode;
    }
}




