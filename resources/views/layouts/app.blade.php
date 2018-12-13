<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body class="app sidebar-mini rtl">
@include('layouts.sidebar')
@include('layouts.navbar')




@yield('content')




<script src="{{asset('js/read.js')}}"></script>
<script> $('div.alert').delay(3000).slideUp(300); </script>
</body>
</html>

