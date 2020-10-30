<?php

namespace app\helpers;

use Yii;
use yii\helpers\Url;

class ChangeLanguage
{
    public static function createFrontMirrors($langs)
    {
        $return = [];
        $base = Url::base(true);
        foreach ($langs as $key => $value) {
            $object = [];
            $object['full'] = $value->name_en;
            if ($value->primary == 1) {
                $object['url'] = $base;
            } else {
                $object['url'] = $base.'/'.$value->code;
            }
            array_push($return, $object);
        }

        return $return;
    }

    public static function createBlogMirrors($langs)
    {
        $return = [];
        $base = Url::base(true);
        foreach ($langs as $key => $value) {
            $object = [];
            $object['full'] = $value->name_en;
            $object['url'] = $base.'/'.$value->code.'/blog/1';
            array_push($return, $object);
        }

        return $return;
    }

    public static function createMirrors($langs)
    {
        $return = [];
        $replace = [];
        foreach ($langs as $key => $value) {
            $replace[$key] = '/'.$value->code.'/';
        }

        $currentUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if ( $currentUrl === 'http://localhost:8080/' || $currentUrl === 'http://www.imst.com' || $currentUrl === 'http://localhost:8080/rus' || $currentUrl === 'http://www.imst.com/rus' || $currentUrl === 'http://localhost:8080/en' || $currentUrl === 'http://www.imst.com/en') {
            $current = str_replace($replace, '/replacedLang/', Url::base(true).'/replacedLang');
        } else {
            $current = str_replace($replace, '/replacedLang/', Url::current([], true));
        }
        foreach ($langs as $key => $value) {
            $object = [];
            $object['full'] = $value->name_en;
            $object['url'] = str_replace('replacedLang', $value->code, $current);
            array_push($return, $object);
        }

        return $return;
    }
}
