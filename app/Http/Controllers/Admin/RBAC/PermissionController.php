<?php

namespace App\Http\Controllers\Admin\RBAC;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Permission::paginate(10);

        return view('admin.rbac.permission.list', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $top_perms = Permission::where('pid', 0)->get();
// dd($top_perms);
        return view('admin.rbac.permission.add', compact('top_perms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'display_name', 'pid', 'description']);

        $name = Permission::where('name', $request->name)->count();
        if ( $name ){

            return back();
        }

        $permission = new Permission();

        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->pid = $request->pid;
        $permission->description = $request->description;

        $permission->save();

        session()->flash('success', '增加权限 '.$request->name.' 成功');

        return redirect()->route('rbac.permission.index');
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
