@php 
session(['menuOpenSub' => 'product']);  
@endphp
@section('body')
<x-block class="content-wrapper">
  
  <x-product.edit title="Cập nhật sản phẩm" :product="$product"  />
</x-block>
@endsection

<x-layout.admin />
