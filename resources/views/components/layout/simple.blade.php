
<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @stack('meta')
  <title>@yield('meta-title', "UFALA")</title>

  <link href="{{asset('theme/css/app.css')}}" rel="stylesheet">
  <link href="{{asset('theme/css/owl.theme.default.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/css/owl.carousel.min.css')}}" rel="stylesheet">
  @stack('css')
</head>

<body {{ $attributes }}>
  @yield('header')
  @yield('body')
  @yield('footer')
  @stack('outer')
  <script src="{{asset('theme/js/vendors.min.js')}}"></script>
  <x-out />
  <script src="{{asset('theme/js/extensions/toastr.min.js')}}"></script>
  <script src="{{asset('theme/js/summernote/summernote.js')}}"></script>

  <script src="{{asset('theme/js/pickers/dateTime/moment-with-locales.min.js')}}"></script>
  <script src="{{asset('theme/js/pickers/dateTime/bootstrap-datetimepicker.min.js')}}"></script>
  <script src="{{asset('theme/js/pickers/pickadate/picker.js')}}"></script>
  <script src="{{asset('theme/js/pickers/pickadate/picker.date.js')}}"></script>
  <script src="{{asset('theme/js/pickers/pickadate/picker.time.js')}}"></script>
  <script src="{{asset('theme/js/forms/select/select2.full.min.js')}}"></script>
  <script src="{{asset('theme/js/app-menu.min.js')}}"></script>
  <script src="{{asset('theme/js/app.js')}}"></script>
  <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
  @stack('js')
  
  @stack('script')

</body>

</html>