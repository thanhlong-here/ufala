@section('content')
<div class="content-wrapper">

    <x-block class="content-body">
        <div class="row">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title"> {{__('Yêu cầu rút tiền')}} </h4>    

                    </div>
                    <div class="card-block">
                        <x-form action="{{route('dropship.withdraw')}}">
                            <div class="form-group">
                              <input class="form-control" name="total" type="number" placeholder="{{__('Số tiền cần rút')}} " />      
                            </div>

                            <div class="form-group">
                              <input class="form-control" name="bank_acc" type="text" placeholder="{{__('Số tài khoản')}} " />      
                            </div>

                            <div class="form-group">
                              <input class="form-control"  name="bank_owner" type="text" placeholder="{{__('Chủ tài khoản')}} " />      
                            </div>
                            <div class="form-group">
                              <input class="form-control"  name="bank_name" type="text" placeholder="{{__('Ngân hàng')}} " />      
                            </div>

                            <div class="form-group">
                              <input class="form-control"  name="bank_branch" type="text" placeholder="{{__('Chi nhánh ngân hàng')}} " />      
                            </div>

                            <div class="form-group">
                              <button class="btn btn-primary block round">{{__("Gửi yêu cầu")}}</button>   
                            </div>

                        </x-form>

                    </div>
                </div>

            </div>
            
            <div class="col-md-7">

                <div class="card shadow">
                    <div class="card-header"> <h4 class="card-title"> {{__("Lịch sử giao dịch")}}</h4> </div>
                    <div class="card-block">

                        <table class="table">
                       
                            <tbody>

                                @foreach ($list as $row)

                                <tr>
                                    <td>
                                        {{$row->note}}
                                    </td>
                                    <td class="text-xs-right" style="width:12rem">
                                        <p class="font-small-3">
                                        {{ $row->created_at->format('h:i:s')  }} - {{ $row->created_at->format('d-m-Y')  }}
                                        <p>
                                        <p class="text-bold-700"> 
                                            {!! $row->in ? "<span class='primary'> + $row->in </span>"  : "<span class='danger'>  - $row->out </span>" !!}
                                        </p>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <div class="pull-right">
                            {{$list->render()}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-block>
</div>


@endsection

<x-layout.drop />