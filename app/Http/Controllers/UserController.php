<?php

namespace App\Http\Controllers;
use App\Models\User; // لاستدعاء موديل المقالات

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello()
{
$users = User::all();
return view('users.hello', compact('users'));}
}
