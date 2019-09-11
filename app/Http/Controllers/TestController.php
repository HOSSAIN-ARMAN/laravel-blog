<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function testData(){
        return view('test.test');
    }
    public function addTest(Request $request){
        Test::addTestInfo($request);
        return "ok";
    }
    public function showTest(){
        return view('test.show-testData', [
            'test' => Test::all()
        ]);
    }
    public function deleteTest(Request $request){
        $test = Test::find($request->id);
        $test->delete();
        return redirect('test/show-test')->with('message',  'done');
    }
}
