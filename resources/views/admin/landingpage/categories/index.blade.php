
@push('css')

    <style>
        table td{
            vertical-align: middle!important;
        }
    </style>
@endpush

@section('content')
    <div class="content-wrapper">
        <x-block class="content-header row mb-1">
            <div class="content-header-left col-md-6">
                <h3 class="content-header-title">

                    {{ __("Danh sách Thể Loại") }}
                </h3>
            </div>
            <div class="content-header-right col-md-6">
                <div class="pull-right">

                    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-create">
                        <i class="ft ft-plus"> </i>
                        {{__('Thêm danh mục mới') }}
                    </button>
                    @push('outer')
                    <x-modal id="modal-create">
                        <div class="modal-content">
                            <x-category.edit title="{{__('Thêm danh mục mới')}}" prefix="landingpage" action="categories.store" />
                        </div>
                    </x-modal>
                    @endpush
                </div>
            </div>
        </x-block>
        <x-block class="content-body">
            <div class="card">
                <div class="card-block">

                    <div class="mb-2">
                        <x-landingpage.categories.search />
                    </div>

                    <div id="table" class="table-responsive table-categories">
                        @include('admin.landingpage.categories.inc.content')
                    </div>
                </div>
            </div>
        </x-block>
    </div>
@endsection

@push('script')
    <script>
         $('.pagination a').on('click', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                getCategories(page);
        });
        
        function getCategories(page)
        {
            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    });
                    $.ajax({
                        async: false,
                        data: {
                            // category_id : $("select[name=category_id]").val(),
                            page : page
                        },
                        type: "GET",

                        url: "{{ route('admin.listcategories') }}",

                        beforeSend: ()=>$('.overlay').show(),

                        success: function(res) {
                            $('.table-categories').html(res);
                            $('.pagination a').on('click', function(e) {
                                    e.preventDefault();
                                    var page = $(this).attr('href').split('page=')[1];
                                    getCategories(page);
                            });
                            $('button[data-toggle="modal"]').click(function(){
                                let id = $(this).data('target');
                                $('"'+id+'"').modal('show');

                            });
                            setTimeout(function(){
                                $('.overlay').hide()
                            }, 500);
                        },
                        error: function(xhr, status, error) {
                            console.log(status + ': ' + error);
                        }
                    });
        }
    </script>
@endpush

<x-layout.admin />
<x-loading.loading />
