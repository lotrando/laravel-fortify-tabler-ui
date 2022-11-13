<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\DepartmentColors;
use App\Models\Employee;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
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

        $departments = Department::all();
        $jobs = Job::all();

        if ($request->ajax()) {

            $model = Employee::with('department', 'job')->select('*');

            return DataTables::eloquent($model)

                ->addColumn('action', function ($data) {
                    $buttons = '
                        <center>
                            <button title="Upravit" name="edit" id="' . $data->id . '" class="edit btn-link p-1"><i class="fas fa-edit"></i></button>
                            <button title="Odstranit Fotografii" name="remove" id="' . $data->id . '" class="remove btn-link p-1"><i class="fas fa-user-tag"></i></button>
                            <button title="Odstranit" name="delete" id="' . $data->id . '" class="delete btn-link p-1"><i class="fas fa-trash"></i></button>
                        </center>
                        ';
                    return $buttons;
                })

                ->toJson();
        }

        return view('employees.index')->with([
            'departments' => $departments,
            'jobs' => $jobs,
        ]);
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
        $rules = [
            'personal_number'   =>  'required|unique:employees|min:5|max:5',
            'title_preffix',
            'last_name'         =>  'required',
            'first_name'        =>  'required',
            'middle_name',
            'married_name',
            'title_suffix',
            'department_id'     =>  'required',
            'job_id'            =>  'required',
            'email',
            'start_date'        =>  'required',
            'end_date',
            'comment',
            'phone',
            'mobile',
            'id_card'           =>  'required',
            'coffee',
            'status',
            'employment'        =>  'required',
            'image'             =>  'image|max:4096'
        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $image = $request->file('image');

        if (empty($image)) {
            $image_name = 'no_image.png';
        } else {
            $current = Carbon::now()->format('Ymd-His');
            $guessExtension = $image->guessExtension();
            $image_name = $request->personal_number . '_' . $current . '.' . $guessExtension;
            $image->move(public_path('foto'), $image_name);
        }

        $form_data = [
            'personal_number'   =>  $request->personal_number,
            'title_preffix'     =>  $request->title_preffix,
            'last_name'         =>  $request->last_name,
            'first_name'        =>  $request->first_name,
            'middle_name'       =>  $request->middle_name,
            'married_name'      =>  $request->married_name,
            'title_suffix'      =>  $request->title_suffix,
            'department_id'     =>  $request->department_id,
            'job_id'            =>  $request->job_id,
            'email'             =>  $request->email,
            'start_date'        =>  $request->start_date,
            'end_date'          =>  $request->end_date,
            'comment'           =>  $request->comment,
            'phone'             =>  $request->phone,
            'mobile'            =>  $request->mobile,
            'id_card'           =>  $request->id_card,
            'coffee'            =>  $request->coffee,
            'status'            =>  $request->status,
            'employment'        =>  $request->employment,
            'image'             =>  $image_name
        ];

        Employee::create($form_data);

        return response()->json(['success' => 'Zaměstnanec uložen do databáze']);
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
    public function edit($id)
    {
        $data = Employee::with('department')->findOrFail($id);
        if (request()->ajax()) {
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if ($image != '') {
            $rules = [
                'personal_number'   =>
                'required|min:5|max:5|unique:employees,id',
                'title_preffix',
                'last_name'         =>  'required',
                'first_name'        =>  'required',
                'middle_name',
                'married_name',
                'title_suffix',
                'department_id'     =>  'required',
                'job_id'            =>  'required',
                'email',
                'start_date'        =>  'required',
                'end_date',
                'comment',
                'phone',
                'mobile',
                'id_card'           =>  'required',
                'coffee',
                'status',
                'employment'        =>  'required',
                'image'             =>  'image|max:4096'
            ];

            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $current = Carbon::now()->format('Ymd-His');
            $guessExtension = $image->guessExtension();
            $image_name = $request->personal_number . '_' . $current . '.' . $guessExtension;
            $image->move(public_path('foto'), $image_name);
        } else {
            $rules = [
                'personal_number'   =>  'required',
                'title_preffix',
                'last_name'         =>  'required',
                'first_name'        =>  'required',
                'middle_name',
                'married_name',
                'title_suffix',
                'department_id'     =>  'required',
                'job_id'            =>  'required',
                'email',
                'start_date',
                'end_date',
                'comment',
                'phone',
                'mobile',
                'id_card',
                'coffee',
                'status',
                'employment'        =>  'required',
                'image',
            ];

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
        }

        $form_data = [
            'personal_number'   =>  $request->personal_number,
            'title_preffix'     =>  $request->title_preffix,
            'last_name'         =>  $request->last_name,
            'first_name'        =>  $request->first_name,
            'middle_name'       =>  $request->middle_name,
            'married_name'      =>  $request->married_name,
            'title_suffix'      =>  $request->title_suffix,
            'department_id'     =>  $request->department_id,
            'job_id'            =>  $request->job_id,
            'email'             =>  $request->email,
            'start_date'        =>  $request->start_date,
            'end_date'          =>  $request->end_date,
            'comment'           =>  $request->comment,
            'phone'             =>  $request->phone,
            'mobile'            =>  $request->mobile,
            'id_card'           =>  $request->id_card,
            'coffee'            =>  $request->coffee,
            'status'            =>  $request->status,
            'employment'        =>  $request->employment,
            'image'             =>  $image_name
        ];

        Employee::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Zaměstnanec aktualizován']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Employee::find($id);
        $file = $user->image;
        $filename = public_path() . '/foto/' . $file;
        File::delete($filename);
        $user->delete();
        return ['success' => true, 'message' => 'Deleted Successfully'];
    }

    /**
     * Remove photo
     */
    public function destroyPhoto($id)
    {
        $user = Employee::find($id);
        $file = $user->image;
        $filename = public_path() . '/foto/' . $file;
        File::delete($filename);

        $user->image = 'no_image.png';
        $user->save();

        return ['success' => true, 'message' => 'Photo Deleted Successfully'];
    }
}
