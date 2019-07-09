<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class TypeController.
 *
 * @author  The scaffold-interface created at 2017-07-07 07:33:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('type.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type();

        
        $type->cat_name = $request->cat_name;

        
        
        $type->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new type has been created !!']);

        return redirect('type');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('type/'.$id);
        }

        $type = Type::findOrfail($id);
        return view('type.show',compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('type/'. $id . '/edit');
        }

        
        $type = Type::findOrfail($id);
        return view('type.edit',compact('type'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $type = Type::findOrfail($id);
    	
        $type->cat_name = $request->cat_name;
        
        
        $type->save();

        return redirect('type');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/type/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$type = Type::findOrfail($id);
     	$type->delete();
        return URL::to('type');
    }
}
