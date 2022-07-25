<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Models\Place;
use Session;
use App\Models\Category;
use Auth;

class ManagePlaceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

   public function index(){
       return view('addPlace')->with('categoryID',Category::all());
   }

    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image1=$r->file('placeImage1');        
        $image1->move('images',$image1->getClientOriginalName());   //images is the location                
        $imageName1=$image1->getClientOriginalName(); 

        $image2=$r->file('placeImage2');        
        $image2->move('images',$image2->getClientOriginalName());   //images is the location                
        $imageName2=$image2->getClientOriginalName(); 

        $image3=$r->file('placeImage3');        
        $image3->move('images',$image3->getClientOriginalName());   //images is the location                
        $imageName3=$image3->getClientOriginalName(); 

        $image4=$r->file('placeImage4');        
        $image4->move('images',$image4->getClientOriginalName());   //images is the location                
        $imageName4=$image4->getClientOriginalName(); 

        $image5=$r->file('placeImage5');        
        $image5->move('images',$image5->getClientOriginalName());   //images is the location                
        $imageName5=$image5->getClientOriginalName(); 

        $addPlace=Place::create([
            'name'=>$r->placeName,
            'introduction'=>$r->placeIntroduction,
            'nearByArea'=>$r->placeNearByArea,
            'price'=>$r->placePrice,
            'image1'=>$imageName1,
            'image2'=>$imageName2,
            'image3'=>$imageName3,
            'image4'=>$imageName4,
            'image5'=>$imageName5,
            'CategoryID'=>$r->CategoryID,
            'address'=>$r->placeAddress,
            'reviews'=>$r->placeReviews,
            'openHour'=>$r->placeOpenHour,
            'bookingMethod'=>$r->placeBookingMethod,
            'contactNumber'=>$r->placeContactNumber,
            'map'=>$r->placeMap,
        ]);
        Session::flash('success',"Place create successfully!");
        Return redirect()->route('showPlace');
    }

    public function view(){
        $places=DB::table('places')
        ->leftjoin('categories','categories.id','=','places.CategoryID')
        ->select('places.*','categories.name as catName')
        ->get();
        return view('showPlace')->with('places',$places);
    }

    public function delete($id){
        
        $deletePlace=Place::find($id);
        $deletePlace->delete();
        Session::flash('success',"Place was delete successfully!");
        Return redirect()->route('showPlace');
    }

    public function edit($id){

        $places=Place::all()->where('id',$id);
        Return view('editPlace')->with('places',$places)
                                  ->with('categoryID',Category::all());
    }

    public function update(){

        $r=request();
        $places =Place::find($r->placeID);
        
        if($r->file('placeImage1')!=''){
            $image=$r->file('placeImage1');        
            $image->move('images1',$image->getClientOriginalName());                   
            $imageName1=$image->getClientOriginalName(); 
            $places->image=$imageName1;
            }    
        
            if($r->file('placeImage2')!=''){
                $image=$r->file('placeImage2');        
                $image->move('images2',$image->getClientOriginalName());                   
                $imageName2=$image->getClientOriginalName(); 
                $places->image=$imageName2;
                }   

                if($r->file('placeImage3')!=''){
                    $image=$r->file('placeImage3');        
                    $image->move('images3',$image->getClientOriginalName());                   
                    $imageName3=$image->getClientOriginalName(); 
                    $places->image=$imageName3;
                    }   

                    if($r->file('placeImage4')!=''){
                        $image=$r->file('placeImage4');        
                        $image->move('images4',$image->getClientOriginalName());                   
                        $imageName4=$image->getClientOriginalName(); 
                        $places->image=$imageName4;
                        }   

                        if($r->file('placeImage5')!=''){
                            $image=$r->file('placeImage5');        
                            $image->move('images5',$image->getClientOriginalName());                   
                            $imageName5=$image->getClientOriginalName(); 
                            $places->image=$imageName5;
                            }      

        $places->name=$r->placeName;
        $places->introduction=$r->placeIntroduction;
        $places->nearByArea=$r->placeNearByArea;
        $places->price=$r->placePrice;
        $places->CategoryID=$r->CategoryID;
        $places->address=$r->placeAddress;
        $places->reviews=$r->placeReviews;
        $places->openHour=$r->placeOpenHour;
        $places->bookingMethod=$r->placeBookingMethod;
        $places->contactNumber=$r->placeContactNumber;
        $places->map=$r->placeMap;
        $places->save();

        Return redirect()->route('showPlace');
    }
}