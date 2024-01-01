@push('css')
<link href="{{asset('theme/css/home.css')}}" rel="stylesheet">
@endpush
@push('script')
<script>
  $('#home-slide').carousel({
    interval: 2000,
  });
 
</script>
@endpush
@section('body')
<x-block id="sticky-wrapper" class="bg-white sticky-wrapper line-b">
  <x-layout.inc.header />
</x-block>

<x-block class="container-fluid">
  
  <!-- /horizontal menu content-->
  <div class="container">
    @yield('banner')
  </div>
</x-block>
@yield('content')
@endsection
@section('footer')
<x-layout.inc.footer />
@endsection

<x-layout.simple />