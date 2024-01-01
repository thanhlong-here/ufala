@php 
session(['menuOpenSub' => 'product']);  
@endphp
@section('body')
<x-block class="content-wrapper">
  <x-product.edit title="Thêm sản phẩm mới"  />
</x-block>
@endsection

<x-layout.admin />