<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PromotionRequest;
use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin:admin');
    }

    public function getPromotion()
    {
        $about = [];
        $oAbout = Promotion::get();
        if ($oAbout->isNotEmpty()) {
            $about = $oAbout;
        }

        return view('admin.promotion.index',compact('about'));
    }

    public function post(Request $request)
    {

        $id = $request->id;
        if(!empty($id))
        {
//            dd($request);
            $promotion = Promotion::find($id);
            $promotion->title = $request['title'];
            $promotion->short_description = $request['short_description'];
            $promotion->start_date = $request['start_date'];
            $promotion->end_date = $request['end_date'];

//            Promotion::where('id', $request->id)->update();
            $promotion->update();
            return redirect('admin/promotion/index')->with('update','อัพเดทข้อมูลเรียบร้อย');
        }
        else
        {
            $promotion = new Promotion();
            $promotion->title = $request['title'];
            $promotion->short_description = $request['short_description'];
            $promotion->start_date = $request['start_date'];
            $promotion->end_date = $request['end_date'];
            $promotion->save();
            return redirect('admin/promotion/index')->with('success','โพสโปรโมชั่นเรียบร้อย');
        }
    }
}
