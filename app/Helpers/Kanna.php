<?php

namespace App\Helpers;

class Kanna
{
    private static $romajiToHiragana = [
        'shi' => 'し', 'chi' => 'ち', 'tsu' => 'つ', 'fu' => 'ふ', 
        'ja' => 'じゃ', 'ju' => 'じゅ', 'jo' => 'じょ',
        'fa' => 'ふぁ', 'fi' => 'ふぃ', 'fe' => 'ふぇ', 'fo' => 'ふぉ',
        'wa' => 'わ', 'wo' => 'を',
        'ra' => 'ら', 'ri' => 'り', 'ru' => 'る', 're' => 'れ', 'ro' => 'ろ',
        'za' => 'ざ', 'zu' => 'ず', 'ze' => 'ぜ', 'zo' => 'ぞ',

        // Huruf vokal
        'a' => 'あ', 'i' => 'い', 'u' => 'う', 'e' => 'え', 'o' => 'お',

        // Konsonan dasar
        'ka' => 'か', 'ki' => 'き', 'ku' => 'く', 'ke' => 'け', 'ko' => 'こ',
        'sa' => 'さ', 'su' => 'す', 'se' => 'せ', 'so' => 'そ',
        'ta' => 'た', 'te' => 'て', 'to' => 'と',
        'na' => 'な', 'ni' => 'に', 'nu' => 'ぬ', 'ne' => 'ね', 'no' => 'の',
        'ha' => 'は', 'hi' => 'ひ', 'he' => 'へ', 'ho' => 'ほ',
        'ma' => 'ま', 'mi' => 'み', 'mu' => 'む', 'me' => 'め', 'mo' => 'も',
        'ya' => 'や', 'yu' => 'ゆ', 'yo' => 'よ',

        // Konsonan tambahan
        'ga' => 'が', 'gi' => 'ぎ', 'gu' => 'ぐ', 'ge' => 'げ', 'go' => 'ご',
        'ba' => 'ば', 'bi' => 'び', 'bu' => 'ぶ', 'be' => 'べ', 'bo' => 'ぼ',
        'pa' => 'ぱ', 'pi' => 'ぴ', 'pu' => 'ぷ', 'pe' => 'ぺ', 'po' => 'ぽ',
        
        // kombinasi lain
        'fa' => 'ぱ', 'fi' => 'ぴ', 'fu' => 'ぷ', 'fe' => 'ぺ', 'fo' => 'ぽ','r' => 'る',

        // Spesial
        'n' => 'ん',

        // numerik
        '0' => '〇', '1' => '一', '2' => '二', '3' => '三', '4' => '四',
        '5' => '五', '6' => '六', '7' => '七', '8' => '八', '9' => '九',
        '10' => '十', '100' => '百', '1000' => '千'
    ];

    public static function toHiragana($text)
    {
        return self::convertKana($text, self::$romajiToHiragana);
    }

    private static function convertKana($text, $kanaMap)
    {
        // Urutkan romaji dari yang terpanjang ke terpendek untuk mencegah kesalahan parsing
        uksort($kanaMap, function ($a, $b) {
            return strlen($b) - strlen($a);
        });

        // Lakukan penggantian kata satu per satu
        foreach ($kanaMap as $romaji => $kana) {
            $text = str_replace($romaji, $kana, $text);
        }

        return $text;
    }
}
