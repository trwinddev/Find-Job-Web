<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    @include('admin.layout.styles')
    @include('admin.layout.scripts')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('admin.layout.nav')
            @include('admin.layout.sidebar')
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('heading')</h1>
                    </div>
                    @yield('main_content')
                </section>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts_footer')
</body>
