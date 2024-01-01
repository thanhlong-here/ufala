@push('css')
    <style>
        .dots-3:hover{
            cursor: pointer;
        }
        select,input[type="text"]{
            border-radius: 40px!important;
        }
        input[type="date"]{
            height: 42px!important;
            border-right: none!important;
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            bottom: 0;
            color: transparent;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: auto;
        }
        .date-start{
            border-top-left-radius: 40px!important;
            border-bottom-left-radius: 40px!important;
        }
        div > .calendar-icon{
            width: 30%;
            background: #F2F3F5;
            border: 1px solid #DBDBDB;
            font-size: 20px;
            text-align: center;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 40px;
        }

    </style>
@endpush

<div class="input-group flex">
    <input class="form-control date-start" type="date">
    <input class="form-control date-end" type="date">
    <div class="calendar-icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
</div>
