<?php

namespace App\Http\Controllers;

use App\Models\Name; // تعديل حرف N لكبير
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index()
    {
        // 1. جلب كافة البيانات من قاعدة البيانات
        $names = Name::all();

        // 2. إرجاع صفحة العرض مع تمرير مصفوفة البيانات
        return view('names.index', compact('names'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Name $name) // تعديل حرف N لكبير
    {
        //
    }

    public function edit(Name $name) // تعديل حرف N لكبير
    {
        //
    }

    public function update(Request $request, Name $name) // تعديل حرف N لكبير
    {
        //
    }

    public function destroy(Name $name) // تعديل حرف N لكبير
    {
        //
    }
}