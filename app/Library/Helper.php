<?php
/**
 * Created by PhpStorm.
 * User: Manian
 * Date: 8/25/2018
 * Time: 10:25 AM
 */


namespace App\Library;


use App\Http\Controllers\GeneralController;
use App\Models\CommissionPeriod;
use App\Models\InviteLink;
use App\Models\SiteSetting;
use App\Models\User;
use App\Models\UserCache;
use App\Models\UserRemainsPoint;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Helper
{

    public static function ConvertGregorianToShamsi($number)
    {

        if ($number >= 1 And $number <= 12) {

            $month = ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'];


        } else {
            return "";
        }

    }

    public static function convertToEnNumber($string)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];

        $num = range(0, 9);
        $convertedPersianNums = str_replace($persian, $num, $string);
        $englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);

        return $englishNumbersOnly;
    }

    public static function convertToEnNumberInputs($inputs = [], $keys = [])
    {

        $_i = [];
        foreach ($keys as $key) {
            if (array_key_exists($key, $inputs))
                $_i[$key] = Helper::convertToEnNumber($inputs[$key]);
        }

        return array_merge($inputs, $_i);

    }

    public static function convertToFANumber($string)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        $convertedPersianNums = str_replace($english, $persian, $string);

        return $convertedPersianNums;
    }

    public static function createCaptcha()
    {

        $image = imagecreate(100, 40);
        $text = '';
        for ($i = 0; $i < 5; $i++) {
            $number = rand(1, 9);
            $text .= $number;
            $bdColor = imagecolorallocate($image, rand(0, 100), rand(0, 100), rand(0, 100));
            $tColor = imagecolorallocate($image, rand(100, 255), rand(100, 255), rand(110, 255));
            imagefttext($image, rand(18, 25), rand(-15, 15), $i * 18 + 4, rand(20, 30), $tColor, "./font/BFarnaz.ttf", $number);
        }

        Session::put('Captcha', $text);
        Session::save();
        header("Content-Type: image/jpeg");
        imagejpeg($image);
        imagedestroy($image);
    }

    public static function SeoFix($string)
    {
        $fixingString = $string;
        $fixingString = preg_replace("/[^a-z0-9.]+/i", "_", $fixingString);
        $fixingString = trim($fixingString, "_");
        $fixingString = trim($fixingString);

        return $fixingString;
    }

    public static function isValidTimeStamp($timestamp)
    {
        return ((string)(int)$timestamp === $timestamp)
            && ($timestamp <= PHP_INT_MAX)
            && ($timestamp >= ~PHP_INT_MAX);
    }

    /**
     * Find the position of the Xth occurrence of a substring in a string
     * @param $haystack
     * @param $needle
     * @param $number integer > 0
     * @return int
     */
    public static function strposX($haystack, $needle, $number)
    {
        if ($number == '1') {
            return strpos($haystack, $needle);
        } elseif ($number > '1') {
            return strpos($haystack, $needle, self::strposX($haystack, $needle, $number - 1) + strlen($needle));
        } else {
            return error_log('Error: Value for parameter $number is out of range');
        }
    }


    /**
     * check is string is json or not
     *
     * @param $string
     * @return bool|mixed
     */
    public static function isJson($string)
    {

        if (is_string($string)) {
            $j = json_decode($string);
            return (json_last_error() == JSON_ERROR_NONE ? $j : false);
        }
        return false;

    }


    /**
     * @param String $text
     * @param integer $length
     * @return String
     */
    public static function excerpt($text, $length)
    {

        $_t = strip_tags($text);

        if (strlen($_t) <= $length) {
            $result = $_t;
        } else {
            $result = substr($_t, 0, stripos($_t, " ", $length));
        }

        return $result;


    }


    public static function dayAgo($date)
    {
        $date = new Verta($date);
        $now_date = Carbon::now();
        $now_date = new Verta($now_date);
        if ($date) {
            return $date->formatDifference($now_date);
        }

        return "0000/00/00";
    }
}
