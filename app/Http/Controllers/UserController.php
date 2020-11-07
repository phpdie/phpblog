<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   	    echo __METHOD__.PHP_EOL."<pre>";
        //return view('user');
        $result=DB::table('user')->get();
       	// print_r($result);
       	$arr=DB::table('user')->get()->toArray();
       	dd($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/add', ['title' => '添加记录']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $result=DB::table('user')->insert([
            'username' => $request->input('username'),
            // 'password' => Hash::make($request->input('password')),
            'password' => $request->input('password'),
        ]);
        //todo 实现类似tp success的功能 添加成功后跳转
        print_r($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       	echo __METHOD__.PHP_EOL."<pre>";
       	$result=DB::table('user')->where(['id'=>$id])->first();
       	print_r($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result=DB::table('user')->where(['id'=>$id])->first();

        // print_r($result);
        return view('user/add',(array)$result);
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
