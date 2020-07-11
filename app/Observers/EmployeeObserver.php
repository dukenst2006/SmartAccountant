<?php

namespace App\Observers;

use App\Models\Employee;
use App\Models\MarketplaceOwner;
use App\Models\Supervisor;

class EmployeeObserver
{
    /**
     * Handle the employee "created" event.
     *
     * @param  Employee  $employee
     * @return void
     */
    public function created(Employee $employee)
    {

    }


    /**
     * Handle the employee "creating" event.
     *
     * @param  Employee  $employee
     * @return void
     */
    public function creating (Employee $employee)
    {

    }


    /**
     * Handle the employee "updated" event.
     *
     * @param  Employee  $employee
     * @return void
     */
    public function updated(Employee $employee)
    {
        //
    }

    /**
     * Handle the employee "deleted" event.
     *
     * @param  Employee  $employee
     * @return void
     */
    public function deleted(Employee $employee)
    {
        //
    }

    /**
     * Handle the employee "restored" event.
     *
     * @param  Employee  $employee
     * @return void
     */
    public function restored(Employee $employee)
    {
        //
    }

    /**
     * Handle the employee "force deleted" event.
     *
     * @param  Employee  $employee
     * @return void
     */
    public function forceDeleted(Employee $employee)
    {
        //
    }
}
