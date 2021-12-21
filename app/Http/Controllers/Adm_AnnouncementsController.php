<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adm_Announcements;
use DB;


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
        //
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
