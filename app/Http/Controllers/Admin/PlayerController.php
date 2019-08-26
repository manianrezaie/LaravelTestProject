<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $players = Player::paginate(20);
        return view('admin.player.players_list', compact('players'));
    }


    public function newPlayerForm()
    {
        return view('admin.player.edit');
    }

    public function newPlayerSave(Request $request)
    {
        $this->validate($request, [
            'city' => 'required',
            'name' => 'required',
            'image' => 'required|image',
        ]);

        $image = "";
        $fileController = new FileController();

        if ($request->hasFile('image')) {

            $response = $fileController->imageUpload($request, "image", "images/players");
            if (!$response->isSuccess())
                return redirect()->back()->withErrors($response->getMessage());

            $image = $response->getMessage();

        }

        $args = [
            'title' => $request->name,
            'city' => $request->city,
            'image' => $image,
            'score' => $request->score,
            'birth_date' => $request->birth_date,
        ];

        $result = Player::insert($args);

        if ($result) {
            return redirect()->to(route('admin_players'))->with(['success' => "تیم جدید با موفقیت ذخیره شد"]);
        }

        return back()->with(['danger' => "خطا در ذخیره تیم جدید!"]);

    }


    public function editPlayerForm(Request $request)
    {
        $this->validate($request, [
            'id' => 'integer|required'
        ]);

        $player = Player::get($request->id);
        return view('admin.player.edit', compact('player'));
    }


    public function editPlayerSave(Request $request)
    {
        $this->validate($request, [
            'id' => 'integer|required',
            'name' => 'required',
            'image' => 'image'
        ]);

        $player = Player::get($request->id);

        $image = $player->image;
        $fileController = new FileController();

        if ($request->hasFile('image')) {

            $response = $fileController->imageUpload($request, "image", "images/players");
            if (!$response->isSuccess())
                return redirect()->back()->withErrors($response->getMessage());

            $image = $response->getMessage();

            if ($player->image != "")
                $fileController->delImage($player->image, "images/players");

        }

        $args = [
            'title' => $request->name,
            'city' => $request->city,
            'image' => $image,
            'id' => $request->id,
            'score' => $request->score,
            'birth_date' => $request->birth_date,
        ];

        $result = Player::edit($args);

        if ($result)
            return back()->with(['success' => "بازیکن مورد نظر با موفقیت ذخیره شد"]);

        return back()->with(['danger' => "خطا در ذخیره تغییرات بازیکن!"]);
    }


    public function apiListAll(Request $request)
    {
        if ($request->has("c")) {
            if (is_numeric($request->c)) {
                return new \App\Http\Resources\PlayerCollection(Player::orderBy('id', 'desc')->take($request->c)->get());
            }
        }
        return new \App\Http\Resources\PlayerCollection(Player::all());
    }

    public function apiShow(Request $request)
    {
        return new \App\Http\Resources\Player(Player::get($request->id));
    }

}
