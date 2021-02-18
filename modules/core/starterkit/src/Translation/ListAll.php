<?php

namespace ErikFig\Core\StarterKit\Translation;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;

class ListAll
{
    public static function all()
    {
        $files = app()->make('translator')->getLoader()->namespaces();
        $files = collect($files);

        $path = resource_path('lang');
        $files->prepend($path);

        $currentLang = app()->getLocale();
        $files = $files->map(function ($item) use ($currentLang) {
            return $item . '/' . $currentLang;
        });

        $trans = collect(['text' => []]);

        $files->each(function ($item) use (&$trans) {
            $getTrans = self::loadTranslations($item);
            $trans = $trans->mergeRecursive($getTrans);
        });

        return $trans;
    }

    protected static function loadTranslations($path)
    {
        $trans = [];

        if (!is_dir($path)) {
            return $trans;
        }

        foreach (File::allFiles($path) as $file) {
            $key = $file->getFilenameWithoutExtension();
            $trans[$key] = Lang::get($key);
        }

        if (file_exists($path . '.json')) {
            $json = file_get_contents($path . '.json');
            $json = json_decode($json, true);

            $trans['text'] = $json;
        }

        return $trans;
    }
}
