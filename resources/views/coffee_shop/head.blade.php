<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  @yield('links')
</head>
<body class="font-sans bg-gray-100">
