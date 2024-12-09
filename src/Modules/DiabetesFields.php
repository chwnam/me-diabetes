<?php

namespace Changwoo\MeDiabetes\Modules;

use Bojaghi\Fields\Modules\CustomFields as BaseCustomFields;

class DiabetesFields extends BaseCustomFields
{
    public static function getConfig(): array
    {
        return [
            'me_diabetes_datetime' => [
                'object_subtype'    => CPT_DIABETES,
                'type'              => 'string',
                'description'       => 'Datetime of record',
                'single'            => true,
                'default'           => self::defaultDatetime(),
                'sanitize_callback' => [self::class, 'sanitizeDatetime'],
                'show_in_rest'      => false,
                'revisions_enabled' => false,
            ],
            'me_diabetes_value'    => [
                'object_subtype'    => CPT_DIABETES,
                'type'              => 'string',
                'description'       => 'Record value',
                'single'            => true,
                'default'           => self::defaultValue(),
                'sanitize_callback' => [self::class, 'sanitizeValue'],
                'show_in_rest'      => false,
                'revisions_enabled' => false,
            ],
        ];
    }

    public static function defaultDatetime(): string
    {
        return '';
    }

    public static function defaultValue(): string
    {
        return '';
    }

    public static function sanitizeDatetime(): string
    {
        return '';
    }

    public static function sanitizeValue(): string
    {
        return '';
    }
}
