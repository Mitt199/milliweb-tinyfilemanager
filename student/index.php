<?php

$url = 'http://localhost/hello/index2.php';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);
var_dump(json_decode($data));


   $title = "Vrai/Faux des pays limitrophes au Niger";

$input = strtolower($title);

    // Replace common chars
    $input = str_replace(
      array('æ',  'ø',  'ö', 'ó', 'ô', 'Ò',  'Õ', 'Ý', 'ý', 'ÿ', 'ā', 'ă', 'ą', 'œ', 'å', 'ä', 'á', 'à', 'â', 'ã', 'ç', 'ć', 'ĉ', 'ċ', 'č', 'é', 'è', 'ê', 'ë', 'í', 'ì', 'î', 'ï', 'ú', 'ñ', 'ü', 'ù', 'û', 'ß',  'ď', 'đ', 'ē', 'ĕ', 'ė', 'ę', 'ě', 'ĝ', 'ğ', 'ġ', 'ģ', 'ĥ', 'ħ', 'ĩ', 'ī', 'ĭ', 'į', 'ı', 'ĳ',  'ĵ', 'ķ', 'ĺ', 'ļ', 'ľ', 'ŀ', 'ł', 'ń', 'ņ', 'ň', 'ŉ', 'ō', 'ŏ', 'ő', 'ŕ', 'ŗ', 'ř', 'ś', 'ŝ', 'ş', 'š', 'ţ', 'ť', 'ŧ', 'ũ', 'ū', 'ŭ', 'ů', 'ű', 'ų', 'ŵ', 'ŷ', 'ź', 'ż', 'ž', 'ſ', 'ƒ', 'ơ', 'ư', 'ǎ', 'ǐ', 'ǒ', 'ǔ', 'ǖ', 'ǘ', 'ǚ', 'ǜ', 'ǻ', 'ǽ',  'ǿ'),
      array('ae', 'oe', 'o', 'o', 'o', 'oe', 'o', 'o', 'y', 'y', 'y', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'c', 'c', 'c', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'u', 'n', 'u', 'u', 'u', 'es', 'd', 'd', 'e', 'e', 'e', 'e', 'e', 'g', 'g', 'g', 'g', 'h', 'h', 'i', 'i', 'i', 'i', 'i', 'ij', 'j', 'k', 'l', 'l', 'l', 'l', 'l', 'n', 'n', 'n', 'n', 'o', 'o', 'o', 'r', 'r', 'r', 's', 's', 's', 's', 't', 't', 't', 'u', 'u', 'u', 'u', 'u', 'u', 'w', 'y', 'z', 'z', 'z', 's', 'f', 'o', 'u', 'a', 'i', 'o', 'u', 'u', 'u', 'u', 'u', 'a', 'ae', 'oe'),
      $input);

    // Replace everything else
    $input = preg_replace('/[^a-z0-9]/', '-', $input);

    // Prevent double hyphen
    $input = preg_replace('/-{2,}/', '-', $input);

    // Prevent hyphen in beginning or end
    $input = trim($input, '-');

    // Prevent to long slug
    if (strlen($input) > 91) {
      $input = substr($input, 0, 92);
    }








 /*$slug = trim($title); // trim the string
 $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug ); // only take alphanumerical characters, but keep the spaces and dashes too...
 $slug= str_replace(' ','-', $slug); // replace spaces by dashes
 $slug= strtolower($slug);*/
   $id = 23;

$final_url = '/exports/'.$input.'-' . $id . '.h5p';

var_dump($final_url);



?>