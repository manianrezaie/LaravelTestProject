<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FileController;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.teams_list', compact('teams'));
    }


    public function newTeamForm()
    {
        return view('admin.team.edit');
    }

    public function newTeamSave(Request $request)
    {
        $this->validate($request, [
            'city' => 'required',
            'name' => 'required',
            'image' => 'required|image',
        ]);

        $image = "";
        $fileController = new FileController();

        if ($request->hasFile('image')) {

            $response = $fileController->imageUpload($request, "image", "images/teams");
            if (!$response->isSuccess())
                return redirect()->back()->withErrors($response->getMessage());

            $image = $response->getMessage();

        }

        $args = [
            'title' => $request->name,
            'city' => $request->city,
            'image' => $image
        ];

        $result = Team::insert($args);

        if ($result) {
            return redirect()->to(route('admin_teams'))->with(['success' => "تیم جدید با موفقیت ذخیره شد"]);
        }

        return back()->with(['danger' => "خطا در ذخیره تیم جدید!"]);

    }


    public function editTeamForm(Request $request)
    {
        $this->validate($request, [
            'id' => 'integer|required'
        ]);

        $team = Team::get($request->id);
        return view('admin.team.edit', compact('team'));
    }


    public function editTeamSave(Request $request)
    {
        $this->validate($request, [
            'id' => 'integer|required',
            'name' => 'required',
            'city' => 'required',
            'image' => 'image'
        ]);

        $team = Team::get($request->id);

        $image = $team->image;
        $fileController = new FileController();

        if ($request->hasFile('image')) {

            $response = $fileController->imageUpload($request, "image", "images/teams");
            if (!$response->isSuccess())
                return redirect()->back()->withErrors($response->getMessage());

            $image = $response->getMessage();

            if ($team->image != "")
                $fileController->delImage($team->image, "images/teams");

        }

        $args = [
            'title' => $request->name,
            'city' => $request->city,
            'image' => $image,
            'id' =>$request->id
        ];

        $result = Team::edit($args);

        if ($result)
            return back()->with(['success' => "تیم مورد نظر با موفقیت ذخیره شد"]);

        return back()->with(['danger' => "خطا در ذخیره تغییرات تیم!"]);
    }

}
