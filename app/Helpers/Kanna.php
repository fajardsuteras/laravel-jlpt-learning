<?php

namespace App\Helpers;

class Kanna
{
    private static $romajiToHiragana = [
        'shi' => 'し', 'chi' => 'ち', 'tsu' => 'つ', 'fu' => 'ふ', 
        'ja' => 'じゃ', 'ju' => 'じゅ', 'jo' => 'じょ',
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
        
        // kombinasi huruf konsonan mati
        'b' => 'ぶ','c' => 'く','d' => 'ど','f' => 'ふ','g' => 'ぐ','h' => 'ふ',
        'j' => 'じ','k' => 'く','l' => 'る','m' => 'む','n' => 'ん','p' => 'ぷ',
        'q' => 'く','r' => 'る','s' => 'す','t' => 'と','v' => 'ゔ','w' => 'う',
        'x' => 'くす','y' => 'や','z' => 'ず',

        // kombinasi lain
        'fa' => 'ぱ', 'fi' => 'ぴ', 'fu' => 'ぷ', 'fe' => 'ぺ', 'fo' => 'ぽ',
        'da' => 'だ', 'di' => 'ぢ', 'du' => 'づ', 'de' => 'で', 'do' => 'ど',
        'yi' => 'い','he' => 'へ',
        'qa' => 'か', 'qi' => 'き', 'qu' => 'く', 'qe' => 'け', 'qo' => 'こ',
        'wi' => 'ひ', 'we' => 'へ',
        'xa' => 'くさ', 'xi' => 'くし', 'xu' => 'くす', 'xe' => 'くせ', 'xo' => 'くそ',
        'ca' => 'か', 'ci' => 'き', 'cu' => 'く', 'ce' => 'け', 'co' => 'こ',
        'la' => 'ら', 'li' => 'り', 'lu' => 'る', 'le' => 'れ', 'lo' => 'ろ',
        

        // Spesial
        'n' => 'ん',

        // numerik
        '0' => '〇', '1' => '一', '2' => '二', '3' => '三', '4' => '四',
        '5' => '五', '6' => '六', '7' => '七', '8' => '八', '9' => '九',
        '10' => '十', '100' => '百', '1000' => '千'
    ];

    public static function toHiragana($text)
    {
        return self::convertKana(strtolower($text), self::$romajiToHiragana);
    }

    public static function toKatakana($text)
    {
        $hiragana = self::convertKana(strtolower($text), self::$romajiToHiragana);
        return mb_convert_kana($hiragana, 'C');
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
