<?php

namespace App\Http\Controllers;

use App\Models\userInfo;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserInfoController extends Controller
{

    public function index()
    {
        $users = userInfo::all();
        return view('index', compact('users'));
    }
    public function create()
    {

        return view('create');
    }
    public function store(Request $request)
    {
        userInfo::create($request->all());

        return redirect('/index');
    }
    public function generateUserQrCode($id)
    {
        $user = userInfo::findOrFail($id);
        $url = url("/show/{$user->id}");
        $qrCode = QrCode::size(300)->generate($url);
        return view('qrcode', ['qrCode' => $qrCode, 'user' => $user]);
    }

    public function showUser($id)
    {
        $user = userInfo::findOrFail($id);

        return view('show', ['user' => $user]);
    }
    public function destroy($id)
    {
        $user = userInfo::findOrFail($id);
        $user->delete();

        return redirect('/')->with('success', 'User deleted successfully');
    }
}
