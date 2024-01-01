@section('body')
<x-block class="content-wrapper">
    <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
        <div class="navbar-wrapper">
            <h4> {{__('Chia sẻ link liên kết')}}</h4>

        </div>
        <div class="fixed top-0 right-0 px-6 py-4 sm:block">

            <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
        </div>

    </nav>
   

    <div class="container p-2">
        <div class="card">
            <div class="card-block">
                <fieldset class="form-group position-relative has-icon-left">
                    <input type="text"
                    value=" {{route('dropship.share',$link->short)}}" disabled
                    class="form-control form-control-lg input-lg" id="iconLeft2" >
                    <div class="form-control-position">
                        <i class="ft-share font-medium-3"></i>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</x-block>
@endsection
@push('script')
<script>
    $('#widget iframe', window.parent.document).height(333);
</script>

@endpush

<x-layout.simple class="fixed-navbar bg-white" />