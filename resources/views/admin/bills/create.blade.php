@extends('adminlte::page')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('adminPanel.Invoices')}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row" id="bill">
        <div class="col-12">
            <div class="card">
                <div class="card-header ">
                    <h4 class="card-title">{{__('Add new')}}</h4>
                    <div class="card-tools">
                        <a class="btn btn-success" href="{{route('admin.bills.index')}}"><i class="fa fa-list"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.bills.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="branch_id">{{__('bills.branch_name')}}</label>
                                            <select v-model="brench_id" class="form-control" name="branch_id" id="branch_id">
                                                @foreach(\App\Brench::all() as $item)
                                                    <option {{$item->id==old('branch_id') ? 'selected':''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="emp_id">{{__('bills.employee name')}}</label>
                                            <select v-model="emp_id" class="form-control" name="emp_id" id="emp_id">
                                                @foreach(\App\Employee::all() as $item)
                                                    <option {{$item->id==old('emp_id') ? 'selected':''}} value="{{$item['id']}}">{{$item['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="paid">{{__('bills.payed value')}}</label>
                                            <input class="form-control" type="number" v-model="paid" name="paid" id="paid">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="bill_way">{{__('bills.bill way')}}</label>
                                            <select v-model="pay_way" class="form-control" name="bill_way" id="bill_way">
                                                <option value="cash">{{__('bills.cash')}}</option>
                                                <option value="credit">{{__('bills.credit')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <table id="products" class="table text-center table-bordered">
                                    <thead>
                                        <th>{{__('product.name')}}</th>
                                        <th>{{__('product.selling_price')}}</th>
                                        <th>{{__('product.quantity')}}</th>
                                        <th></th>
                                    </thead>
                                    @foreach(@App\Product::all() as $item)
                                        <tr>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['selling_price']}}</td>
                                            <td>{{$item['quantity']}}</td>
                                            <td>
                                                <span @click="addProduct({{$item}})" class="btn btn-outline-success">
                                                    {{__('bills.add to bill')}}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-4">
                                <h4 class="col-12 text-center">{{__('bills.products')}}</h4>
                                <table id="products_bill" class="table text-center table-bordered">
                                    <thead>
                                    <th>{{__('product.name')}}</th>
                                    <th>{{__('product.selling_price')}}</th>
                                    <th></th>
                                    </thead>
                                    <tr v-for="product in bill_products">
                                        <td>@{{ product.name }}</td>
                                        <td>@{{ product.selling_price }}</td>
                                        <td>
                                            <span @click="removeProduct(product)" class="btn btn-outline-danger">
                                                {{__('bills.remove')}}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">{{__('bills.total')}}</td>
                                        <td>@{{ total }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <span @click="newBill()" class="btn btn-outline-primary"><i class="fa fa-save"></i> {{__('Save')}}</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const bill = new Vue({
            el: '#bill',
            data: {
                brench_id:'',
                emp_id:'',
                pay_way:'',
                products: [],
                total:0,
                paid:0,
                bill_products:[],
            },
            methods:{
                loadProducts(){
                  axios.get('{{route('api_products')}}').then((data)=>{
                      this.products = data.data;
                  })
                },
                addProduct(item){
                    this.total += item.selling_price;
                    this.bill_products.push(item);
                },
                removeProduct(item) {
                    this.total -= item.selling_price;
                    this.bill_products.splice(this.bill_products.indexOf(item), 1);
                },
                newBill(){
                    const data = {
                        products:this.bill_products,
                        brench_id:this.brench_id,
                        emp_id:this.emp_id,
                        pay_way:this.pay_way,
                        paid:this.paid,
                    };
                    axios.post('{{route('api_new_bill')}}',data).then(()=>{
                        window.location.href = '{{route('admin.bills.index')}}';
                    })
                }
            },
            created(){
                this.loadProducts();
            },
        })
    </script>
@endsection
@section('javascript')
    <x-datatable id="products"></x-datatable>
@endsection
