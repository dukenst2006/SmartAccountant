@extends('adminlte::page')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-12 d-flex flex-wrap">
                    <h1 class="m-0 text-dark">{{__('adminPanel.Settings')}} </h1>
                </div><!-- /.col -->
                <div class="col-sm-12 d-flex justify-content-center w-100">
                    <form action="{{route('admin.settings.update', '1')}}" method="post">
                        @csrf
                        @method('PATCH')
                        <span class="d-inline-block d-flex flex-wrap">
                       <label class="d-flex align-items-center" for="">{{__("General.Enter initial Capital")}}</label>
                       <input type="text" class="capital-input mr-2 mb-2" name="Capital" value="{{$setting->Capital}}"
                              placeholder="ادخل رأس المال الإفتتاحى">
                       <button class="btn btn-success d-inline-block mb-2 mr-2 "><i class="fas fa-pencil-alt"></i> تعديل </button>
                        </span>
                    </form>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row m-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="padding: 20px !important;">
                    <form action="{{ route('admin.settings.update', '1')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="is_site_active">{{__('adminPanel.is_site_active')}}</label>
                                <select class="form-control" name="IsSiteActive" id="is_site_active">
                                    <option
                                            {{auth()->user()->settings->IsSiteActive ?'selected':'' }} value="1">{{__('General.Activate')}}</option>
                                    <option
                                            {{auth()->user()->settings->IsSiteActive ?'selected':'' }} value="0">{{__('General.Deactivate')}}</option>
                                </select>
                                {{--       <x-error name="is_site_active"></x-error>--}}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="store_name">{{__('adminPanel.store_name')}}</label>
                                <input type="text" name="AppName" id="store_name" class="form-control"
                                       value="{{$setting->AppName}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="logo_pic">{{__('adminPanel.logo_picture')}}</label>
                                <input type="file" name="Logo" id="logo_pic" class="form-control">
                            </div>

                            <div class="form-group col-sm-6">

                                {!! Form::label('Stamp',     __('General.Stamp')) !!}
                                {!! Form::file('Stamp',      ['class' => 'form-control']) !!}

                            </div>

                            <div class="form-group col-sm-6">
                                {!! Form::label('VAT',  __('GeneralSettings.VAT') . ' %' ) !!}
                                {!! Form::number('VAT', $setting->VAT, ['class' => 'form-control']) !!}



                                <label class="checkbox-inline">
                                    {!! Form::hidden('EnableVAT', 0) !!}
                                    {!! Form::checkbox('EnableVAT', '1', $setting->EnableVAT) !!}
                                </label>
                                {!! Form::label('EnableVAT',  __('General.EnableVAT')) !!}
                            </div>


                            <div class="form-group col-md-6">
                                <label for="phone">{{__('adminPanel.phone')}}</label>
                                <input type="number" name="PhoneNumber" id="phone" class="form-control"
                                       value="{{$setting->PhoneNumber}}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="subscribe_number">{{__('adminPanel.subscribe_number')}}</label>
                                <input type="number" name="SerialNumber" id="subscribe_number" class="form-control"
                                       value="{{$setting->SerialNumber}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email_address">{{__('adminPanel.email_address')}}</label>
                                <input type="email" name="Email" id="email_address" class="form-control"
                                       value="{{$setting->Email}}">
                            </div>

                            <div class="form-group col-sm-6">
                                {!! Form::label('Currency', __('GeneralSettings.Currency')) !!}
                                {!! Form::select('Currency',['SAR'=>'ريال','AED'=>'درهم','USD'=>'دولار'], $setting->Currency,['class' => 'form-control']) !!}
                            </div>
</div>
<div class="row">

{{--   <div class="col-6">--}}
{{--       <label for="closingMessageEnglish">{{__('adminPanel.closing_message')}} - {{__('English')}}</label>--}}
{{--       <textarea class="form-control msg" name="message_en" id="message_en" cols="30" rows="10">--}}
{{--           {{\App\Models\Settings::all()->first()->trans->where('lang_code', 'en')->first()->message}}--}}
{{--       </textarea>--}}
{{--       <x-error name="message_en"></x-error>--}}
{{-- </div>--}}

<div class="col-12">
 <label for="closingMessageArabic">{{__('adminPanel.closing_message')}}
     - {{__('Arabic')}}</label>
 <textarea class="form-control msg" name="message_ar" id="message_ar" cols="30"
           rows="10">
{{--           {{\App\Models\Settings::all()->first()->trans->where('lang_code', 'ar')->first()->message}}--}}

</textarea>
 {{--       <x-error name="message_ar"></x-error>--}}
</div>
</div>

<div class="row mt-2">
<div class="form-group col-md-6">
 <label for="program_status">{{__('adminPanel.is_program_active')}}</label>
 <select class="form-control" name="program_status" id="program_status">
     {{--       <option {{\App\Models\Settings::all()->first()->program_status ?'selected':'' }} value="1">{{__('Active')}}</option>--}}
     {{--       <option {{!\App\Models\Settings::all()->first()->program_status ?'selected':'' }} value="0">{{__('Not Active')}}</option>--}}
 </select>
 {{--       <x-error name="program_status"></x-error>--}}
</div>

<div class="form-group col-md-6">
 <label for="end_date">{{__('adminPanel.program_end_date')}}</label>
 <input type="date" name="program_end_date" id="end_date" class="form-control" value=" ">
 {{--   <input type="date" name="program_end_date" id="end_date" class="form-control" value="{{\App\Models\Settings::all()->first()->program_end_date}}">--}}
</div>
</div>


<div class="row mt-5">
<div class="col-12">
 <button class="btn btn-primary" type="submit"><i
             class="fa fa-save"></i> {{__('Buttons.Save')}} </button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection
@section('customejs')
<script src="{{asset('tinymce/tinymce.min.js')}}"></script>
<script>

tinymce.init({
selector: "#message_ar",
language: 'ar',
directionality: "rtl"
});
tinymce.init({
selector: "#message_en",
});
</script>
@endsection
