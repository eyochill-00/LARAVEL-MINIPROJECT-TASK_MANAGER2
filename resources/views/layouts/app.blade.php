<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Personal Task Manager')</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f6f8; margin:0; padding:2rem; color:#222; }
        .container { max-width: 900px; margin: 0 auto; background:#fff; padding:2rem; border-radius:8px; box-shadow:0 1px 4px rgba(0,0,0,.1); }
        h1 { margin-top:0; }
        table { width:100%; border-collapse: collapse; margin-top:1rem; }
        th, td { text-align:left; padding:.6rem; border-bottom:1px solid #e0e0e0; }
        .btn { display:inline-block; padding:.4rem .8rem; border-radius:4px; text-decoration:none; font-size:.85rem; border:none; cursor:pointer; }
        .btn-primary { background:#3b82f6; color:#fff; }
        .btn-edit { background:#f59e0b; color:#fff; }
        .btn-delete { background:#ef4444; color:#fff; }
        .btn-toggle { background:#10b981; color:#fff; }
        .status-pending { color:#b45309; font-weight:bold; }
        .status-completed { color:#059669; font-weight:bold; }
        .alert { background:#d1fae5; color:#065f46; padding:.75rem 1rem; border-radius:4px; margin-bottom:1rem; }
        form.inline { display:inline; }
        label { display:block; margin-top:.75rem; font-weight:bold; }
        input[type=text], input[type=date], textarea, select { width:100%; padding:.5rem; margin-top:.25rem; border:1px solid #ccc; border-radius:4px; box-sizing:border-box; }
    </style>
</head>
<body>
    <div class="container">
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>
