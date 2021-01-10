<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UserRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(UserRequest $request)
    {
        $nameFile = null;
    
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            
            $name = uniqid(date('HisYmd'));
            $extension = $request->photo->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = $request->photo->storeAs('users', $nameFile);

            if (!$upload) {
                return redirect()
                    ->back()
                    ->with('msg_error', 'Falha ao fazer upload')
                    ->withInput();
            }
 
        }

        $requestData = $request->all();
        $requestData['photo'] = 'users/' . $nameFile;

        $user = User::create($requestData);

        Auth::login($user);

        return redirect()->route('admin.tasks.index');
    }
}
