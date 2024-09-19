<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::firstOrCreate(
            [
                'id' => 1,
            ],
            [
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        auth()->login($user);

        return redirect()->route('reverb');
    }
}
