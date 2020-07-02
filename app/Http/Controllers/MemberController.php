<?php

namespace App\Http\Controllers;
use App\Member;
use DB;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=Member::all();
        // return $members;
         return view('Member.view_members',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member=new Member();
        // $member->member_name=$request->member_name;
        // $member->member_address=$request->member_address;
        // $member->member_mobilenumber=$request->member_mobilenumber;
        // $member->member_email=$request->member_email;
        // $member->member_web =$request->member_web ;
        // $member->member_description=$request->member_description;
        // $member->status =$request->status;
        // $member->save();
        // return response()->json($member);
        return $request;
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
     
    public function test()
    {
        // $members=Member::all();
        $members = DB::select('select * from members');
        // return $members;
        return view('Member.member_ajaxlist',compact('members'));
    }
    public function test2()
    {
        return view('Member.add_member');
        
    }
}
