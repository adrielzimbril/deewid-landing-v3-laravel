<?php

//namespace App\Helpers;

function getJsonData($file) {
  $json = file_get_contents($file);
  $data = json_decode($json);

  return $data->data;
}


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if (!function_exists('isUrl')) {
  /**
   * Get HTML attribute based on the scope
   *
   * @param $url
   *
   * @return mixed
   */
  function isUrl($url) {
    return filter_var($url, FILTER_VALIDATE_URL);
  }
}

if (!function_exists('image')) {
  /**
   * Get image url by path
   *
   * @param $path
   *
   * @return string
   */
  function image($path) {
    return asset('assets/media/' . $path);
  }
}


if (!function_exists('is_file_exists')) {
  function is_file_exists($item, $storage = 'local')
  : bool {
    if (!blank($item) and !blank($storage)) {
      if ($storage == 'local') {
        if (file_exists($item)) {
          return true;
        }
      } elseif ($storage == 'aws_s3') {
        if (Storage::disk('s3')->exists($item)) {
          return true;
        }
      } elseif ($storage == 'wasabi') {
        if (Storage::disk('wasabi')->exists($item)) {
          return true;
        }
      } elseif ($storage == 'bunnycdn') {
        if (Storage::disk('bunnycdn')->exists($item)) {
          return true;
        }
      }
    }

    return false;
  }
}

if (!function_exists('static_asset')) {
  function static_asset($path = null, $secure = null)
  : string {
    $version = '?v1.0.0.2';
    //$version = '';
    if (str_contains(php_sapi_name(), 'cli') || defined('LARAVEL_START_FROM_PUBLIC')) {
      //return Storage::disk('bunnycdn')->url($path) . $version;
      return app('url')->asset($path, $secure) . $version;
    } else {
      //return Storage::disk('bunnycdn')->url($path) . $version;
      return app('url')->asset($path, $secure) . $version;
      //return app('url')->asset('public/' . $path, $secure);
    }
  }
}

if (!function_exists('get_media')) {
  function get_media($item, $storage = 'local', $updater = true)
  : false | string {
    if (!blank($item) and !blank($storage)) {
      if ($storage == 'local') {
        if ($updater) {
          return base_path('public/' . $item);
        } else {
          return static_asset($item);
        }
      } elseif ($storage == 'aws_s3') {
        return Storage::disk('s3')->url($item);
      } elseif ($storage == 'wasabi') {
        return Storage::disk('wasabi')->url($item);
      } elseif ($storage == 'bunnycdn') {
        return Storage::disk('bunnycdn')->url($item);
      }
    }
    return false;
  }
}

function renameSVG() {
  $repertoire = 'deewid/svg-2';

  $fichiers = scandir($repertoire);
  $nomsDejaUtilises = [];

  foreach ($fichiers as $fichier) {
    $cheminFichier = $repertoire . '/' . $fichier;

    if (is_file($cheminFichier) && strtolower(pathinfo($fichier, PATHINFO_EXTENSION)) === 'svg') {
      $nomSansExtension = pathinfo($fichier, PATHINFO_FILENAME);
      $nouveauNom = strtolower(str_replace(' ', '-', str_replace(['(', ')'], '', $nomSansExtension))) . '.svg';


      /* Replace and Adapt SVG content */
      $string = get_svg_icons($nomSansExtension);
      //Replace view box to fit into svg
      $string = preg_replace('/viewBox="0 0 40 40"/i', 'viewBox="6 6 28 28"', $string);
      // Enregistrer la version modifiée du fichier SVG sur le disque
      file_put_contents($cheminFichier, $string);
      /* Replace and Adapt SVG content */

      // Ajouter le nouveau nom à la liste des noms utilisés
      $nomsDejaUtilises[] = $nouveauNom;

      // Construire le nouveau chemin
      $nouveauChemin = $repertoire . '/' . $nouveauNom;

      // Renommer le fichier
      rename($cheminFichier, $nouveauChemin);
    }
  }
}

function get_svg_icons($name)
: array | string | null {
  $file_path = 'deewid/svg-2/' . $name . '.svg';

  if (!is_file_exists($file_path)) {
    return '';
  }

  $file_path = get_media($file_path, 'local', true);

  $svg_content = file_get_contents($file_path);

  $dom = new DOMDocument;
  $dom->loadXML($svg_content);

  // remove unwanted comments
  $xpath = new DOMXPath($dom);
  foreach ($xpath->query('//comment()') as $comment) {
    $comment->parentNode->removeChild($comment);
  }

  // remove unwanted tags
  $unwantedTags = [
    'title',
    'desc',
    'defs'
  ];

  $elementAttributes = [
    'g',
    'mask',
    'rect',
    'path',
    'circle',
    'use',
    'polygon',
    'ellipse',
    'line',
    'polyline',
    'text'
  ];

  // remove unwanted tags
  foreach ($unwantedTags as $elementName) {
    $element = $dom->getElementsByTagName($elementName);
    if ($element['length']) {
      $dom->documentElement->removeChild($element[0]);
    }
  }

  // remove unwanted attribute in tags and set color
  foreach ($elementAttributes as $attribute) {
    $element = $dom->getElementsByTagName($attribute);
    foreach ($element as $el) {
      setColor($el);
    }
  }

  $svg = $dom->getElementsByTagName('svg')[0];
  $svg->removeAttribute('width');
  $svg->removeAttribute('height');

  $string = $dom->saveXML($dom->documentElement);

  // remove empty lines
  $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);

  return $string;
}

function setColor($el) {
  $el->removeAttribute('id');

  $fill = $el->getAttribute('fill');

  if ($fill && !($fill == 'none')) {
    $el->setAttribute('fill', $color ?? 'currentColor');
  }

  $stroke = $el->getAttribute('stroke');

  if ($stroke && !($stroke == 'none')) {
    $el->setAttribute('stroke', $color ?? 'currentColor');
  }

  return $el;
}

function get_svg_icon($name, $class = null, $svgClass = null, $add = null, $addSvg = null, $color = null) {
  $file_path = 'deewid/svg/' . $name . '.svg';

  if (!is_file_exists($file_path)) {
    return '';
  }

  $file_path = get_media($file_path, 'local', true);

  $svg_content = file_get_contents($file_path);

  $dom = new DOMDocument;
  $dom->loadXML($svg_content);

  // remove unwanted comments
  $xpath = new DOMXPath($dom);
  foreach ($xpath->query('//comment()') as $comment) {
    $comment->parentNode->removeChild($comment);
  }

  // add class to svg
  if (!empty($svgClass)) {
    foreach ($dom->getElementsByTagName('svg') as $element) {
      $element->setAttribute('class', $svgClass);
    }
  }
  // add element to svg
  if (!empty($addSvg)) {
    foreach ($dom->getElementsByTagName('svg') as $element) {
      foreach ($addSvg as $key => $value) {
        $element->setAttribute($key, $value);
      }
    }
  }

  // remove unwanted tags
  $unwantedTags = [
    'title',
    'desc',
    'defs'
  ];

  $elementAttributes = [
    'g',
    'mask',
    'rect',
    'path',
    'circle',
    'use',
    'polygon',
    'ellipse',
    'line',
    'polyline',
    'text'
  ];

  // remove unwanted tags
  foreach ($unwantedTags as $elementName) {
    $element = $dom->getElementsByTagName($elementName);
    if ($element['length']) {
      $dom->documentElement->removeChild($element[0]);
    }
  }

  // remove unwanted attribute in tags and set color
  foreach ($elementAttributes as $attribute) {
    $element = $dom->getElementsByTagName($attribute);
    foreach ($element as $el) {
      setColor($el);
    }
  }

  $svg = $dom->getElementsByTagName('svg')[0];
  $svg->removeAttribute('width');
  $svg->removeAttribute('height');

  $string = $dom->saveXML($dom->documentElement);

  $cls = ['flex items-center justify-center'];

  if (!empty($class)) {
    $cls = array_merge($cls, explode(' ', $class));
  }

  // remove empty lines
  $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);
  $output = '<span ' . $add . ' class="' . implode(' ', $cls) . '">' . $string . '</span>';

  return $output;
}

function getTextPreview($text, $words = 12, $strip = '...')
: string {
  $text = strip_tags(Str::words($text, $words, $strip));
  return $text;
}
