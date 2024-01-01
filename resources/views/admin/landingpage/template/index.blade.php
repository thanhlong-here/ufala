@push('css')
    <style>
        .main-ldp{
            position: relative;
            padding: 8px;
            border: solid 1px #e8ecf3;
            border-radius: 30px;
            margin-bottom: 20px;
            background: #8080803b;
        }
        .avatar-ldp{
            height: 50px;
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 30px;
            /* margin:0 auto; */
            width: 116px;
            margin-left: 15px;
        }
        .avatar-overlay{
            border-color: #22C2DC!important;
            background-color: #2DCEE3!important;
            width: 100%;
            height: auto;
            margin-top: 10px;
            padding: 8px;
            font-size: 20px;
            display: flex;
            justify-content: space-between;
            border-radius: 30px;
        }
        .name-ldp{
            text-overflow: ellipsis;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            width: 70%;
            height: 30px;
            padding-left: 10px;
        }
        .tool-tip{
            width: 30%;
        }
        .no-temp{
            text-align: center;
            background: white;
            height: 200px;
            padding-top: 50px;
        }
        .listHandle {
            position: absolute;
            border: 1px solid #00000014;
            display: none;
            top: 33px;
            right: 15px;
            width: 186px;
            height: 204px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            background: #fff;
            border-radius: 4px;
            margin-top: 4px;
            z-index: 9999;
        }

        .listHandle ul {
            padding: 10px 20px;
            
        }

        .listHandle ul li {
            list-style: none;
            
        }

        .listHandle ul li a {
            line-height: 20px;
        }

        #table.list-ldp {
            overflow-x: initial !important;
        }
        .table td {
            /* text-align: center;  */
            vertical-align: middle;
        }
    </style>
@endpush
@section('content')
    <div class="content-wrapper">
        <x-block class="content-header row mb-1 bg-white">
            <div class="content-header-left col-md-6">
               <div class="form-group ">
{{--                   <label for="">Danh mục</label>--}}
                    <x-select.categories name="category_id" class="form-control font-medium-2" prefix="landingpage" selected="{{@$cate}}" />
                </div>
            </div>

        </x-block>
        <x-block class="content-body">
            <div id="table" class="table-responsive list-ldp">
                @include('admin.landingpage.template.content')
            </div>
        </x-block>
    </div>
@endsection
<x-layout.admin />
<x-loading.loading />
