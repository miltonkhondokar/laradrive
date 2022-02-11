<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class FileManagementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetchFolders = DB::select('select * from tbl_folders where status=1');
        $folders = json_decode(json_encode($fetchFolders), true);
        return view('file-manager.pages.dashboard',['folders' => $folders]);
    }

    public function fileExplorer($id,$fname)
    {
        $fid = Crypt::decryptString($id);
        $fname = Crypt::decryptString($fname);
        $data = array();
        $data['current_location'] = $fname;
        $data['parent_id'] = $fid;
        //fetch folders
        $fetchFolders = DB::select('select * from tbl_folders where status = 1 and parent_item_id = '.$fid);
        $folders = json_decode(json_encode($fetchFolders), true);

        //files
        $fetchFiles = DB::select('select * from tbl_items where status = 1 and folder_id = '.$fid);
        $files = json_decode(json_encode($fetchFiles), true);
        return view('file-manager.pages.file-explorer',['parent_folder' => $data,'folders' => $folders,'files' => $files]);
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
    public function createFile(Request $request)
    {



        $validated = $request->validate(
            [
                'file_name' => 'required|file|mimes:doc,pdf,xls,ppt,mp3,gif,jpeg,jpg,png,txt,3gpp,3gp,mp4,mpeg,mpg,mov,webm,flv,avi,pptx,docx,xlsx|max:10000',
            ],
            [
                'file_name.required' => 'File name is required',
                'folder_name.max' => 'The folder name has to be max 10 mb',
            ]
        );

        if($request->hasFile('file_name')){

            //fetch max serial
            $maxSerialQuery = DB::select('select max(serial) as max_serial from tbl_items');
            $maxSerial =  $maxSerialQuery[0]->max_serial + .0000000001;


            $file = $request->file('file_name');
            $path = 'file-manager/uploads';
            $file_name = date("YmdHis").'_'.$request->file('file_name')->getClientOriginalName();
            $file->move($path,$file_name);
            $item_path = $path.'/'.$file_name;

        $query = DB::table('tbl_items')->insert([
        'folder_id' => $request->parent_folder_id,
            'item_name' => $request->file('file_name')->getClientOriginalName(),
            'item_type' => $request->file('file_name')->getClientMimeType(),
            'item_size' => $request->file('file_name')->getMaxFilesize(),
            'item_path' => $item_path,
            'status' => 1,
            'serial' => $maxSerial,
            'created_by' => '',
            'created_at' => date("Y-m-d H:i:s"),
            'csrf_token' => $request->input('_token')
        ]);

        }

        if($query){
            return redirect()->back()->with('success', 'File Uploaded successfully!');
        }else{
            return redirect()->back()->with('error', 'Error while file uploading!');
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
