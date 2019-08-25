<?php

namespace App\Http\Controllers;

use App\Library\Message\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic;

class FileController extends Controller
{

    public function imageUpload(Request $request, $uploadedName, $path = "images", $resize = true)
    {


        $response = new Response();

        $valid = Validator::make($request->all(), [
            $uploadedName => 'required|image|max:10240'
        ]);

        if ($valid->fails())
            return $response->setMessage($valid)->setSuccess(false);


        $photoName = time() . str_random(4) . '.' . $request->$uploadedName->getClientOriginalExtension();

        $path = Storage::disk('public')->getAdapter()->getPathPrefix() . trim($path, '/') . "/";

        $request->$uploadedName->move($path, $photoName);


        if ($resize) {
            //thumb
            $thumb = ImageManagerStatic::make($path . $photoName);
            $rW = $thumb->getWidth() / 80;
            $rH = $thumb->getHeight() / $rW;
            $thumb->resize(80, $rH);
            $thumb->save($path . 'thumb-' . $photoName);

            //thumb2
            $thumb2 = ImageManagerStatic::make($path . $photoName);
            $rW = $thumb2->getWidth() / 250;
            $rH = $thumb2->getHeight() / $rW;
            $thumb2->resize(250, $rH);
            $thumb2->save($path . 'thumb2-' . $photoName);

            //thumb3
            $thumb3 = ImageManagerStatic::make($path . $photoName);
            $rW = $thumb3->getWidth() / 350;
            $rH = $thumb3->getHeight() / $rW;
            $thumb3->resize(350, $rH);
            $thumb3->save($path . 'thumb3-' . $photoName);
        }

        return $response->setMessage($photoName)->setSuccess(true);

    }

    public static function getImage($name, $size = '', $path = "images/")
    {
        $url = self::_getImage($name, $size, $path);
//        if (file_exists($url))
            return $url;
//        return asset('img/no_image.jpg');

    }

    private static function _getImage($name, $size = '', $path = "images/")
    {

        $path = Storage::url(trim($path, '/')) . "/";

        switch ($size) {
            case "thumb" :
                return $path . 'thumb-' . $name;
                break;
            case "thumb2" :
                return $path . 'thumb2-' . $name;
                break;
            case "thumb3" :
                return $path . 'thumb3-' . $name;
                break;
            default :
                return $path . $name;

        }
    }

    public function delImage($name, $path = "images")
    {

        Storage::disk('public')->delete(trim($path) . "/" . $name);
        Storage::disk('public')->delete(trim($path) . "/thumb-" . $name);
        Storage::disk('public')->delete(trim($path) . "/thumb2-" . $name);
        Storage::disk('public')->delete(trim($path) . "/thumb3-" . $name);

    }

}
