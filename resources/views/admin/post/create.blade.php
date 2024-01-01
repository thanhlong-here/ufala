@section('body')
<x-block class="content-wrapper">
  <x-post.edit title="{{__('Viết bài mới')}}" action="posts.store" />
</x-block>
@endsection

<x-layout.admin />