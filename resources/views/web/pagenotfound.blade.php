@section('content')
    <x-error></x-error>

@endsection
@if($admin)
<x-layout.admin/>
@else
<x-layout.auth/>
@endif