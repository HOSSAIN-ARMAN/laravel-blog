<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider(){
        return view('admin.slider.add-slider');
    }
    public function newSlider(Request $request){
        $image = $request->file('slider_image');
        $imageName = $image->getClientOriginalName();
        $directory = "slider-image/";
        $image->move($directory,$imageName);
        $slider = new Slider();
        $slider->slider_title             = $request->slider_title;
        $slider->slider_short_description = $request->slider_title;
        $slider->slider_image             = $directory.$imageName;
        $slider->publication_status       = $request->publication_status;
        $slider->save();
        return redirect('/slider/add-slider')->with('message', 'Slider data save successfully');
    }
    public function manageSlider(){
        return view('admin.slider.manage-slider',[
            'sliders' => Slider::all()
        ]);
    }
    public function editSlider($id){
        return view('admin.slider.edit-slider',[
            'slider' => Slider::find($id)
        ]);
    }
    public function updateSlider(Request $request){
        $image = $request->file('slider_image');
        $slider = Slider::find($request->id);
        if ($image){
            unlink($slider->slider_image);
            $imageName = $image->getClientOriginalName();
            $directory = "slider-image/";
            $image->move($directory,$imageName);

            $slider->slider_title             = $request->slider_title;
            $slider->slider_short_description = $request->slider_short_description;
            $slider->slider_image             = $directory.$imageName;
            $slider->publication_status       = $request->publication_status;
            $slider->save();
            return redirect('/slider/manage-slider')->with('message', 'Slider data save successfully');
        }else{
            $slider->slider_title             = $request->slider_title;
            $slider->slider_short_description = $request->slider_short_description;
            $slider->publication_status       = $request->publication_status;
            $slider->save();
            return redirect('/slider/manage-slider')->with('message', 'Slider data save successfully');
        }


    }
    public function deleteSlider(Request $request){
        $slider = Slider::find($request->id);
        unlink($slider->slider_image);
        $slider->delete();
        return redirect('/slider/manage-slider')->with('message', 'Slider Data delete successfully');
    }
}
