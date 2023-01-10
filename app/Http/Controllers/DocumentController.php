<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'category_id'           => 'required',
            'accordion_name'        => 'required',
            'accordion_group'       => 'nullable',
            'name'                  => 'required',
            'revision'              => 'required',
            'description'           => 'required',
            'position'              => 'required',
            'status'                => 'required',
            'file'                  => 'required|mimes:pdf,doc,xls|max:4096'
        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $current = Carbon::now()->format('d-m-Y');
        $file_ext  = $request->file->extension();
        $file_name = $current . '.' . $file_ext;
        $request->file->move(public_path('standardy/lecebne/'), Str::lower($file_name));

        $form_data = [
            'category_id'           => $request->category_id,
            'accordion_name'        => $request->accordion_name,
            'name'                  => $request->name,
            'description'           => $request->description,
            'position'              => $request->position,
            'revision'              => $request->revision,
            'file'                  => $file_name,
            'status'                => $request->status,
            'created_at'            => $request->created_at,
            'updated_at'            => $request->updated_at
        ];

        Document::create($form_data);

        return response()->json(['success' => 'Standard uložen do databáze']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Document::with('category')->findOrFail($id);
        if (request()->ajax()) {
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $file = $request->file('file');
        if ($file != '') {
            $rules = [
                'category_id'           => 'required',
                'accordion_name'        => 'required',
                'accordion_group'       => 'nullable',
                'name'                  => 'required',
                'description'           => 'required',
                'position'              => 'required',
                'revision'              => 'required',
                'status'                => 'required',
                'file'                  => 'required|mimes:pdf,doc,xls|max:4096'
            ];

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $current = Carbon::now()->format('d-m-Y');
            $file_ext  = $request->file->extension();
            $file_name = $current . '.' . $file_ext;
            $request->file->move(public_path('standardy/lecebne/'), Str::lower($file_name));
        } else {

            $rules = [
                'category_id'           => 'required',
                'accordion_name'        => 'required',
                'accordion_group'       => 'nullable',
                'name'                  => 'required',
                'description'           => 'required',
                'position'              => 'required',
                'revision'              => 'required',
                'status'                => 'required',
            ];
        }

        $form_data = [
            'category_id'           => $request->category_id,
            'accordion_name'        => $request->accordion_name,
            'accordion_group'       => $request->accordion_group,
            'name'                  => $request->name,
            'description'           => $request->description,
            'position'              => $request->position,
            'revision'              => $request->revision,
            'file'                  => $file_name ?? $request->hidden_file,
            'status'                => $request->status,
            'created_at'            => $request->created_at,
            'updated_at'            => $request->updated_at
        ];

        Document::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Standard aktualizován']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id);
        $document->delete();
        return response()->json(['success' => __('Adverse event deleted successfully')]);
    }
}
