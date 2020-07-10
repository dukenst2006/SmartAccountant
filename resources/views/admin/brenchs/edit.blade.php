@extends('adminlte::page')
@section('content')
    <div class="pt-3 container">
        <h4 class="col-12">{{trans('branch.edit_header')}}</h4>
        @if($errors->any())
            <div class="alert-danger alert">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('admin.brenchs.update',$brench)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="name">{{trans('branch.name')}}</label>
                        <input type="text" value="{{$brench['name']}}" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="country">{{trans('branch.country')}}</label>
                        <input type="text" value="{{$brench['country']}}" class="form-control" name="country" id="country">
                    </div>
                    <div class="form-group">
                        <label for="city">{{trans('branch.city')}}</label>
                        <input type="text" value="{{$brench['city']}}" class="form-control" name="city" id="city">
                    </div>
                    <div class="form-group">
                        <label for="manger_phone">{{trans('branch.manger_phone')}}</label>
                        <input type="text" value="{{$brench['manger_phone']}}" class="form-control" name="manger_phone" id="manger_phone">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="address">{{__('branch.address')}}</label>
                        <textarea class="form-control" name="address" id="address" cols="30" rows="10">{{$brench['address']}}"</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tax_number">{{trans('branch.tax_number')}}</label>
                        <input type="text" value="{{$brench['tax_number']}}" class="form-control" name="tax_number" id="tax_number">
                    </div>
                    <div class="form-group">
                        <label for="tax_image">{{trans('branch.tax_image')}}</label>
                        <input type="file" class="form-control" name="tax_image" id="tax_image">
                    </div>
                    <div class="form-group">
                        <img id="blah" src="{{asset($brench['tax_image'])}}" height="100px">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="email">{{trans('branch.email')}}</label>
                        <input type="text" value="{{$brench['email']}}" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="long">{{trans('branch.long')}}</label>
                        <input type="text" value="{{$brench['long']}}" class="form-control" name="long" id="long">
                    </div>
                    <div class="form-group">
                        <label for="lat">{{trans('branch.lat')}}</label>
                        <input type="text" value="{{$brench['lat']}}" class="form-control" name="lat" id="lat">
                    </div>
                    <button class="btn btn-block btn-outline-success" type="submit">{{__('branch.edit')}}</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#tax_image").change(function() {
            readURL(this);
        });
    </script>
@endsection
