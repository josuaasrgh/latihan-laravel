<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/5968/5968705.png" alt="ToDo Logo" width="80" class="mb-3">
                <h3 class="mb-4">@yield('title')</h3>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
