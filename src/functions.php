<?php

use Bojaghi\Continy\Continy;
use Bojaghi\Continy\ContinyException;
use Bojaghi\Continy\ContinyFactory;
use Bojaghi\Continy\ContinyNotFoundException;

if (!function_exists('meDiabetes')) {
    function meDiabetes(): Continy
    {
        static $instance = null;

        if (is_null($instance)) {
            try {
                $instance = ContinyFactory::create(dirname(__DIR__) . '/conf/continy.php');
            } catch (ContinyException|ContinyNotFoundException $e) {
                wp_die($e->getMessage());
            }
        }

        return $instance;
    }
}

if (!function_exists('meDiabetesGet')) {
    /**
     * @template T
     * @param class-string<T> $id
     *
     * @return T|object|null
     */
    function meDiabetesGet(string $id)
    {
        try {
            $instance = meDiabetes()->get($id);
        } catch (ContinyException|ContinyNotFoundException $e) {
            $instance = null;
        }

        return $instance;
    }
}
