<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $model = Employee::with('department', 'job');

            return DataTables::eloquent($model)

                ->addColumn('department', function (Employee $employee) {
                    return $employee->department->center_code;
                })

                ->addColumn('job', function (Employee $employee) {
                    return $employee->job_title;
                })

                ->addColumn('action', function ($data) {
                    $buttons = '
                        <center>
                            <button type="button" title="Upravit" name="edit" id="' . $data->id . '" class="edit btn btn-warning p-2"><i class="fas fa-pen"></i></button>
                            <button type="button" title="Odstranit" name="delete" id="' . $data->id . '" class="delete btn btn-danger p-2"><i class="fas fa-trash-alt"></i></button>
                        </center>
                        ';
                    return $buttons;
                })
                ->toJson();
        }

        return view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // do validation
        Employee::create($request->all());
        return ['success' => true, 'message' => 'Inserted Successfully'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // do validation
        Employee::find($id)->update(request()->all());
        return ['success' => true, 'message' => 'Updated Successfully'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return ['success' => true, 'message' => 'Deleted Successfully'];
    }
}
