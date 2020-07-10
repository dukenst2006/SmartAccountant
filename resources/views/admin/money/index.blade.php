@extends('adminlte::page')
@section('content')
    <div class="container py-2" id="money">
        <h3 class="col-12 text-center mb-3 mt-3">{{__('money.title')}}</h3>
        <div class="row justify-content-center mnmn-w ">
            <div class="card col-3 bg-danger text-white p-2">
                <h4 class=" text-center ">{{__('money.lose')}}</h4>

                <span class="text-center ">@{{ totalLose() }}</span>
                <i class="fas fa-sort-amount-down-alt index-val"></i>
            </div>
            <div class="col-1"></div>
            <div class="card col-3 bg-success text-white p-2">
                <h4 class=" text-center ">{{__('storage.rest')}}</h4>

                <span class=" text-center ">@{{ totalRest() }}</span>
                <i class="fas fa-sort-amount-up index-val"></i>
            </div>
        </div>
        <div  class="card p-3">
            <div class="row">
                <h4 class="col-12 text-right">{{__('money.choose date')}}</h4>
                <div class="form-group col-4">
                    <label for="">{{__('money.from')}}</label>
                    <input @change="getData()" class="form-control" v-model="from" type="date" name="from" id="from">
                </div>
                <div class="form-group col-4">
                    <label for="">{{__('money.to')}}</label>
                    <input @change="getData()" class="form-control" v-model="to" type="date" name="to" id="to">
                </div>
                <div class="form-group col-4">
                    <label for="">{{__('bills.branch_name')}}</label>
                    <select @change="getData()" v-model="branch" name="branch" class="form-control" id="">
                        <option value="all">{{__('money.all')}}</option>
                        @foreach(@App\Brench::all() as $b)
                            <option value="{{$b->id}}">{{$b->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <table v-if="bills != null" class="table text-center table-bordered">
            <tr>
                <th>{{__('bills.bill_number')}}</th>
                <th>{{__('branch.name')}}</th>
                <th>{{__('bills.products_count')}}</th>
                <th>{{__('money.buying_price')}}</th>
                <th>{{__('money.selling_price')}}</th>
                <th>{{__('money.paid')}}</th>
                <th>{{__('money.lose')}}</th>
                <th>{{__('storage.rest')}}</th>
            </tr>
            <tr v-for="bill in bills">
                <td>@{{ bill.id }}</td>
                <td>@{{ bill.branch.name }}</td>
                <td>@{{ bill.products.length }}</td>
                <td>@{{ bill.buying }}</td>
                <td>@{{ bill.total }}</td>
                <td>@{{ bill.paid }}</td>
                <td>@{{ bill.lose  < 0 ? 0 : bill.lose}}</td>
                <td>@{{ bill.rest  < 0 ? 0 : bill.rest}}</td>
            </tr>
            <tr>
                <th colspan="2">
                    {{__('money.total this time')}}
                </th>
                <td>@{{ totalProducts() }}</td>
                <td>@{{ totalBuying() }}</td>
                <td>@{{ allTotal() }}</td>
                <td>@{{ totalPaid() }}</td>
                <td>@{{ totalLose() }}</td>
                <td>@{{ totalRest() }}</td>
            </tr>
        </table>

    </div>
    <script>
        const money = new Vue({
            'el':'#money',
            data:{
                from:'2000-10-25',
                to:'2100-10-25',
                branch:'all',
                bills:[],
            },
            methods:{
                getData(){
                    const data= {
                        'from':this.from,
                        'to':this.to,
                        'branch':this.branch,
                    };
                    axios.post('{{route('money_bill')}}',data).then((data)=>{
                        this.bills = data.data.data;
                    })
                },
                allTotal(){
                    var count = 0;
                    for(var i = 0 ; i < this.bills.length;i++){
                        count += this.bills[i].total;
                    }
                    return count;
                },
                totalPaid(){
                    var count = 0;
                    for(var i = 0 ; i < this.bills.length;i++){
                        count += this.bills[i].paid;
                    }
                    return count;
                },
                totalBuying(){
                    var count = 0;
                    for(var i = 0 ; i < this.bills.length;i++){
                        count += this.bills[i].buying;
                    }
                    return count;
                },
                totalRest(){
                    var count = 0;
                    for(var i = 0 ; i < this.bills.length;i++){
                        count += this.bills[i].rest < 0 ? 0 :this.bills[i].rest ;
                    }
                    return count;
                },
                totalLose(){
                    var count = 0;
                    for(var i = 0 ; i < this.bills.length;i++){
                        count += this.bills[i].lose < 0 ? 0 :this.bills[i].lose ;
                    }
                    return count;
                },
                totalProducts(){
                    var count = 0;
                    for(var i = 0 ; i < this.bills.length;i++){
                        count += this.bills[i].products.length;
                    }
                    return count;
                },
            },
            created(){
                this.getData();
            }
        });
    </script>
@endsection
