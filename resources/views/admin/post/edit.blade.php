@section('body')
<x-block class="content-wrapper">
  <x-post.edit title="__('Chỉnh sửa bài viết')" :post="$Post" />
</x-block>
@endsection

<x-layout.admin />