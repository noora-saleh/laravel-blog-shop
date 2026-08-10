<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقعي - @yield('title')</title>

    <style>
        /* إعدادات الخط والصفحة العامة */
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        /* العناوين والروابط */
        h1 {
            font-size: 1.8rem;
            color: #0f172a;
            margin-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }

        h2 {
            font-size: 1.3rem;
            color: #1e293b;
            margin-top: 0;
        }

        a {
            color: #2563eb;
            text-decoration: none;
            transition: color 0.2s;
        }

        a:hover {
            color: #1d4ed8;
        }

        /* أزرار الإجراءات الرئيسية */
        .btn-primary {
            display: inline-block;
            background-color: #2563eb;
            color: #ffffff;
            padding: 10px 18px;
            border-radius: 6px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
            color: #ffffff;
        }

        /* بطاقة المقال (Article Card) */
        .article-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 16px;
            transition: box-shadow 0.2s;
        }

        .article-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .article-status {
            display: inline-block;
            padding: 4px 8px;
            font-size: 0.85rem;
            border-radius: 4px;
            background-color: #f1f5f9;
            color: #475569;
            margin-top: 8px;
        }

        /* مجموعات الأزرار (Actions) */
        .action-group {
            display: flex;
            gap: 8px;
            align-items: center;
            margin-top: 15px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            border: none;
            cursor: pointer;
            text-align: center;
            display: inline-block;
            text-decoration: none;
            box-sizing: border-box;
            font-family: inherit;
        }

        .btn-show { background-color: #3b82f6; color: white; }
        .btn-show:hover { background-color: #2563eb; }

        .btn-edit { background-color: #eab308; color: white; }
        .btn-edit:hover { background-color: #ca8a04; }

        .btn-delete { background-color: #ef4444; color: white; }
        .btn-delete:hover { background-color: #dc2626; }

        .btn-submit { background-color: #16a34a; color: white; width: 100%; margin-top: 10px; }
        .btn-submit:hover { background-color: #15803d; }

        /* النماذج وحقول الإدخال */
        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #334155;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 1rem;
            box-sizing: border-box;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* تفاصيل المقال (Show Page) */
        .meta-info {
            font-size: 0.85rem;
            color: #64748b;
            border-top: 1px solid #e2e8f0;
            padding-top: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>