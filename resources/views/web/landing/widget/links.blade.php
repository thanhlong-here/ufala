@push('css')
    <style>
        body {
            overflow-y: hidden;
        }

        .table-responsive {
            height: 400px;
            overflow-y: auto
        }

    </style>
@endpush


@section('body')

    <x-block class="content-wrapper">
        <nav class=" navbar-fixed-top p-1 shadow  navbar-light">
            <div class="navbar-wrapper">
                <h4> {{ __('Chọn thành phần liên kết') }} </h4>
            </div>
            <div class="fixed top-0 right-0 px-6 py-4 sm:block">

                <button type="button" class="close-parent black close"> <i class="ft-x"></i></button>
            </div>

        </nav>
        <div class="pt-2 container">
            @auth
                <div class="card card-dropShip">
                    <div class="card-header">
                        <label class="card-title" for="outerlink">Liên kết Dropship :</label>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div id="table" class="table-responsive">
                                <table class="table table-choice">
                                    <thead>

                                        <th>
                                            {{ __('Tên sản phẩm') }}
                                        </th>


                                        <th style="width:8rem">
                                            {{ __('Đơn giá') }}
                                        </th>

                                        <th style="width:8rem">

                                            {{ __('Hoa hồng') }}
                                        </th>


                                        <th>

                                        </th>
                                    </thead>
                                    <tbody>

                                        @foreach ($list as $row)
                                            <tr class="dropShip">

                                                <td>

                                                    <div class="mb-2">
                                                        <label class="font-medium-2 text-bold-600">{{ $row->name }}</label>

                                                    </div>
                                                    <div class="mb-1">

                                                        <span class="font-medium-2">
                                                            #{{ $row->category->name }}
                                                        </span>
                                                    </div>

                                                </td>


                                                <td> {{ number_format($row->price) }} đ</td>

                                                <td>
                                                    {{ $row->dropship_bonus }} %
                                                </td>


                                                <td>
                                                    <button class="seleted-link btn  block close-parent"> {{ __('Lấy link') }}
                                                        <i class="ft-arrow-right"></i> </button>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                                <div class="pull-right">
                                    {{ $list->render() }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <label class="card-title" for="outerlink">Link liên kết :</label>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-8">
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input id="outerlink" type="text" name="link"
                                            class="input-link form-control form-control-lg input-lg"
                                            placeholder="{{ __('Chèn link liên kết') }}">
                                        <div class="form-control-position">
                                            <i class="ft-globe info font-medium-4"></i>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-4">
                                    <button class="parent-add-link btn btn-primary block">{{ __('Thêm link liên kết') }} <i
                                            class="ft-arrow-right"></i></button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-header">
                        <label class="card-title" for="outerlink">Link liên kết :</label>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-8">
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input id="outerlink" type="text" name="link"
                                            class="input-link form-control form-control-lg input-lg"
                                            placeholder="{{ __('Chèn link liên kết') }}">
                                        <div class="form-control-position">
                                            <i class="ft-globe info font-medium-4"></i>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-4">
                                    <button class="parent-add-link btn btn-primary block">{{ __('Thêm link liên kết') }} <i
                                            class="ft-arrow-right"></i></button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            @endauth

        </div>
    </x-block>
@endsection
@push('script')
    <script>
        $(".parent-add-link").click(function() {
            input = $('.input-link').val();
            parent.getLink(input, "modal","dropshipping");
            $('.close-parent').trigger('click');
            $('.tittle-link').html('tittl here...');
        });
    </script>
@endpush
<x-layout.simple class="fixed-navbar" />
