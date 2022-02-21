<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Adm_Announcements;
use DB;
use Carbon\Carbon;


class Adm_AnnouncementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Announcements = DB::table('announcements')->get();
        $Active = DB::table('announcements')->where('tag','Publish')->count();
        $Unpublish = DB::table('announcements')->where('tag','Unpublish')->count();
        $Total = DB::table('announcements')->count();
        $Last_Update = DB::table('announcements')->orderBy('updated_at', 'desc')->value('updated_at');
        return view('admin/announcements/adm_announcements_list', compact('Announcements','Active','Unpublish','Total','Last_Update'));
        //return $Last_Update;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Announcements = DB::table('announcements')->get();
        $Active = DB::table('announcements')->where('tag','Publish')->count();
        $Unpublish = DB::table('announcements')->where('tag','Unpublish')->count();
        $Total = DB::table('announcements')->count();
        $Last_Update = DB::table('announcements')->orderBy('updated_at', 'desc')->value('updated_at');
        return view('admin/announcements/adm_announcements_create', compact('Announcements','Active','Unpublish','Total','Last_Update'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ann_title' => 'required',
            'ann_about' => 'required',
            'ann_upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $cover = $request->file('ann_upload');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put('Announcements/'.$cover->getFilename().'.'.$extension,  File::get($cover));
        //get values ng mga nasa form to save
        $Announcement_new = new Adm_Announcements();
        $Announcement_new->title = $request->ann_title;
        $Announcement_new->contents = $request->ann_about;
        $Announcement_new->filename = $request->ann_upload;
        $Announcement_new->tag = "Unpublish";
        
        $Announcement_new->filename = 'Announcements/'.$cover->getFilename().'.'.$extension;
        $Announcement_new->save();
        return redirect()->route('admin.announcements.announcements_list')->with('success','Announcement Added');
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
        $Announcements = Adm_Announcements::find($id);
        return view('admin/announcements/adm_announcements_edit', compact('Announcements','id'));
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
        $this->validate($request,[
            'ann_title' => 'required',
            'ann_about' => 'required',
        ]);

        if($request->file('ann_upload') != null){
            $cover = $request->file('ann_upload');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put('Announcements/'.$cover->getFilename().'.'.$extension,  File::get($cover));
            //get values ng mga nasa form to save
            $filename = 'Announcements/'.$cover->getFilename().'.'.$extension;
        }
        else{
            $filename= $request->get('ann_upload_');
        }

        $Announcement_Update = Adm_Announcements::find($id);
        $Announcement_Update->title = $request->get('ann_title');
        $Announcement_Update->contents = $request->get('ann_about');
        $Announcement_Update->updated_at = Carbon::now();
        $Announcement_Update->filename = $filename;

        $Announcement_Update->save();
        return redirect()->route('admin.announcements.announcements_list')->with('success','Announcement Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Announcements = Adm_Announcements::find($id);
        $Announcements->tag = "Publish";
        $Announcements->updated_at = Carbon::now();
        $Announcements->save();
        return redirect()->route('admin.announcements.announcements_list')->with('success', 'Announcement published!');
    }

    public function unpublish($id)
    {
        $Announcements = Adm_Announcements::find($id);
        $Announcements->tag = "Unpublish";
        $Announcements->updated_at = Carbon::now();
        $Announcements->save();
        return redirect()->route('admin.announcements.announcements_list')->with('success', 'Announcement unpublished!');
    }
}
