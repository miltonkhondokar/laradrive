<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileManagementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('file-manager.pages.dashboard');
    }
    public function fileExplorer()
    {

//        return view('course/paid_inv',['data' => $data,'profile'=>$profile]);
        return view('file-manager.pages.file-explorer');
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
        $folderName = "";
        $maxId = "";

        $validated = $request->validate(
            [
                'folder_name' => 'required|max:60|regex:/^[a-zA-Z0-9_\s]*$/',
            ],
            [
                'folder_name.required' => 'File name is required',
                'folder_name.min' => 'The folder name has to be al least 6 chars long',
                'folder_name.max' => 'The folder name has to be max 60 chars long',
            ]
        );

        //fetch and create item max id
        $maxFolderItemId = DB::select('select max(item_id) as max_item_id from tbl_folders');
        $maxId =  $maxFolderItemId[0]->max_item_id+1;

        //fetch max serial
        $maxSerialQuery = DB::select('select max(serial) as max_serial from tbl_folders');
        $maxSerial =  $maxSerialQuery[0]->max_serial + .0000000001;

        //fetch and create folder name if exists
        $folder = $validated['folder_name'];
        $fetchFolderName = DB::select('select folder_name from tbl_folders where folder_name="'.$folder.'"');

        //create new folder name if exists
        if(!empty($fetchFolderName)){
        $folderName =  $fetchFolderName[0]->folder_name.'_'.date("YmdHis");
        }else{
            $folderName =  $folder;
        }


        $data = array(
            'item_id' => $maxId,
            'folder_name' => $folderName,
            'parent_status' => 1,
            'child_status' => 0,
            'sub_child_status' => 0,
            'parent_item_id' => 0,
            'status' => 1,
            'serial' => $maxSerial,
            'created_by' => '',
            'created_at' => date("Y-m-d H:i:s"),
            'csrf_token' => $request->input('_token')
        );

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
//        exit;
        $query = DB::table('tbl_folders')->insert([
            'item_id' => $maxId,
            'folder_name' => $folderName,
            'parent_status' => 1,
            'child_status' => 0,
            'sub_child_status' => 0,
            'parent_item_id' => 0,
            'status' => 1,
            'serial' => $maxSerial,
            'created_by' => '',
            'created_at' => date("Y-m-d H:i:s"),
            'csrf_token' => $request->input('_token'),
        ]);

        if($query){
            return redirect()->back()->with('success', 'Created successfully!');
        }else{
            return redirect()->back()->with('error', 'Error during the creation!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
