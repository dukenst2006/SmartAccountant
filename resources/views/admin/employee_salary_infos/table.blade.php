<div class="table-responsive">

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th class="text-center">{{__('Models/EmployeeSalaryInfos.EmployeeID')}}</th>
            <th class="text-center">{{__('Models/EmployeeSalaryInfos.Allowances')}}</th>
            <th class="text-center">{{__('Models/EmployeeSalaryInfos.Deductions')}}</th>
            <th class="text-center">{{__('Models/EmployeeSalaryInfos.Description')}}</th>

            <th colspan="3">{{__('Buttons.Action')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($infos as $employeeSalaryInfo)
            <tr>
                <td class="text-center">{{ $employeeSalaryInfo->EmployeeID }}</td>

                <td class="text-center">{{ $employeeSalaryInfo->Allowances }}</td>

                <td class="text-center">{{ $employeeSalaryInfo->Deductions }}</td>

                <td class="text-center">{{ $employeeSalaryInfo->Description }}</td>
                <td>
                    <form action="{{route('admin.employeeSalaryInfos.destroy',$employeeSalaryInfo)}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-primary" href="{{route('admin.employeeSalaryInfos.edit',$employeeSalaryInfo)}}">{{__('General.Edit')}}</a>
                        <button type="submit" class="btn btn-danger">{{__('Buttons.Delete')}}</button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>


    </table>
</div>




