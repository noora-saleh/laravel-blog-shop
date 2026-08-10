<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // 1. عرض قائمة جميع الإعلانات
    public function index()
    {
        $notices = Notice::all(); // جلب كافة السجلات عبر Eloquent
        return view('notices.index', compact('notices')); // إرسالها للـ View
    }

    /**
     * Show the form for creating a new resource.
     */
   // 2. عرض نموذج إضافة إعلان جديد
    public function create()
    {
        return view('notices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   // 3. استقبال البيانات المكتوبة في النموذج وحفظها
    public function store(Request $request)
    {
        // استقبال البيانات القادمة وحفظها بـ Model
        Notice::create([
            'title'   => $request->title,
            'content' => $request->content,
            
        ]);

        // إعادة توجيه المستخدم إلى صفحة الإعلانات الرئيسية
        return redirect()->route('notices.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // جلب بيانات الإعلان المراد تعديله برقم الـ ID
    $notice = Notice::findOrFail($id);

    // إرسال البيانات القديمة إلى واجهة التعديل
    return view('notices.edit', compact('notice'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    // البحث عن الإعلان في قاعدة البيانات
    $notice = Notice::findOrFail($id);

    // تحديث البيانات القديمة بالبيانات الجديدة القادمة من النموذج
    $notice->update([
        'title'   => $request->title,
        'content' => $request->content,
    ]);

    // إعادة توجيه المستخدم إلى صفحة الإعلانات الرئيسية
    return redirect()->route('notices.index');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
   // 1. البحث عن الإعلان بواسطة ID، أو إظهار 404 إذا لم يكن موجوداً
    $notice = Notice::findOrFail($id);

    // 2. أمر الحذف من قاعدة البيانات بواسطة Eloquent
    $notice->delete();

    // 3. إعادة توجيه المستخدم لصفحة الإعلانات الرئيسية
    return redirect()->route('notices.index');
}
}
