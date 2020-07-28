<div class="table-responsive">

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th class="text-center">{{__('Models/EmployeeSalaryInfos.EmployeeID')}}</th>
            <th class="text-center">{{__('Models/EmployeeSalaryInfos.Allowances')}}</th>
            <th class="text-center">{{__('Models/EmployeeSalaryInfos.Deductions')}}</th>
            <th class="text-center">{{__('Models/EmployeeSalaryInfos.Description')}}</th>

            <th colspan="3">@lang('crud.action')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employeeSalaryInfos as $employeeSalaryInfo)
            <tr>
                <td class="text-center">{{ $employeeSalaryInfo->EmployeeID }}</td>

                <td class="text-center">{{ $employeeSalaryInfo->Allowances }}</td>

                <td class="text-center">{{ $employeeSalaryInfo->Deductions }}</td>

                <td class="text-center">{{ $employeeSalaryInfo->Description }}</td>


            </tr>
        @endforeach
        </tbody>
    </table>


    </table>
</div>




