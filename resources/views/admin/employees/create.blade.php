@extends('adminlte::page')
@section('content')
    <div class="container pt-3">
        <h3 class="col-12 text-center mb-3">
            {{__('employee.create')}}
        </h3>
        @if($errors->any())
            <div class="alert-danger alert">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('admin.employees.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="name">{{__('employee.name')}}</label>
                        <input class="form-control" type="text" name="Name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">{{__('adminlte.email')}}</label>
                        <input class="form-control" type="email" name="Email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">{{__('adminlte.password')}}</label>
                        <input class="form-control" type="password" name="Password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="nation">{{__('employee.nation')}}</label>
                        <input class="form-control" type="text" name="Nationality" id="nation">
                    </div>
                    <div class="form-group">
                        <label for="job">{{__('employee.job')}}</label>
                        <input class="form-control" type="text" name="JobTitle" id="job">
                    </div>
                    <div class="form-group">
                        <label for="identity_number">{{__('employee.identity_number')}}</label>
                        <input class="form-control" type="text" name="NationalID" id="identity_number">
                    </div>
                    <div class="form-group">
                        <label for="phone">{{__('employee.phone')}}</label>
                        <input class="form-control" type="text" name="PhoneNumber" id="phone">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="">{{__('employee.image')}}</label>
                        <div class="custom-file">
                            <input type="file" name="ProfileImage" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <img id="blah" height="120px">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('employee.identity_img')}}</label>
                        <div class="custom-file">
                            <input type="file" name="IdentityImage" class="custom-file-input" id="identity_img">
                            <label class="custom-file-label" for="identity_img">Choose file</label>
                        </div>
                        <img id="blah1" height="120px">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('employee.contract_img')}}</label>
                        <div class="custom-file">
                            <input type="file" name="EmploymentContractImage" class="custom-file-input" id="contract_img">
                            <label class="custom-file-label" for="contract_img">Choose file</label>
                        </div>
                        <img id="blah2" height="120px">
                    </div>

                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="bank_account">{{__('employee.bank_account')}}</label>
                        <input class="form-control" type="text" name="IBAN" id="bank_account">
                    </div>
                    <div class="form-group">
                        <label for="sex">{{__('employee.sex')}}</label>
                        <select name="Sex" class="form-control" id="sex">
                            <option value="{{__('employee.man')}}">{{__('employee.man')}}</option>
                            <option value="{{__('employee.woman')}}">{{__('employee.woman')}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="salary">{{__('employee.salary')}}</label>
                        <input class="form-control" type="number" name="Salary" id="salary">
                    </div>
                    <div class="form-group">
                        <label for="MarketplaceID">{{__('menu.Marketplaces')}}</label>
                        <select class="form-control" id="MarketplaceID" name="MarketplaceID">
                            @foreach($MarketPlaces as $m)
                                <option value="{{$m->ID}}">{{$m->Name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="MarketplaceOwnerID">{{__('employee.MarketOwner')}}</label>
                        <select class="form-control" id="MarketplaceOwnerID" name="MarketplaceOwnerID">
                            @foreach($MarketPlaceOwners as $m)
                                <option value="{{$m->ID}}">{{$m->User->Name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn-block btn btn-outline-success">{{__('employee.create')}}</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#image").change(function() {
            readURL1(this);
        });
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#identity_img").change(function() {
            readURL2(this);
        });
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah2').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#contract_img").change(function() {
            readURL3(this);
        });
    </script>
@endsection
