<?php

namespace Oro\Bundle\AkeneoBundle\Tools;

class FieldConfigModelFieldNameGenerator
{
    /**
     * @param string $value
     *
     * @return string
     */
    public static function generate(string $value): string
    {
        $value = sprintf('Akeneo_%s', $value);

        if (strlen($value) < 23) {
            return $value;
        }

        return substr($value, 0, 11).'_'.crc32($value);
    }
}
