<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Place;
use Session;
use App\Models\Category;

class PlaceController extends Controller
{
    

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
             'reviews'=>$r->placeReviews,
             'openHour'=>$r->placeOpenHour,
             'price'=>$r->placePrice,
             'image'=>$imageName,
             'CategoryID'=>$r->CategoryID,
             'address'=>$r->placeAddress,
             'bookingMethod'=>$r->placeBookingMethod,
             'contactNumber'=>$r->placeContactNumber,
             'map'=>$r->placeMap,
         ]);
         Session::flash('success',"Place create successfully!");
         Return redirect()->route('showPlace');
     }
 
     public function view(){
         
          if(Auth::id()!=1){
             Session::flash('success',"Admin only allow to access this page!");
             return redirect(route('places'));
         }
 
         $viewPlace=DB::table('places')
         ->leftjoin('categories','categories.id','=','places.CategoryID')
         ->select('places.*','categories.name as catName')
         ->get();
 
         Return view('showPlace')->with('places',$viewPlace);
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
             $image1=$r->file('placeImage1');        
             $image1->move('images',$image1->getClientOriginalName());                   
             $imageName1=$image1->getClientOriginalName(); 
             $places->image1=$imageName1;
             }    
         
             if($r->file('placeImage2')!=''){
                $image2=$r->file('placeImage2');        
                $image2->move('images',$image2->getClientOriginalName());                   
                $imageName2=$image2->getClientOriginalName(); 
                $places->image2=$imageName2;
                }   

                if($r->file('placeImage3')!=''){
                    $image3=$r->file('placeImage3');        
                    $image3->move('images',$image3->getClientOriginalName());                   
                    $imageName3=$image3->getClientOriginalName(); 
                    $places->image3=$imageName3;
                    }   

                    if($r->file('placeImage4')!=''){
                        $image4=$r->file('placeImage4');        
                        $image4->move('images',$image4->getClientOriginalName());                   
                        $imageName4=$image4->getClientOriginalName(); 
                        $places->image4=$imageName4;
                        }   

                        if($r->file('placeImage5')!=''){
                            $image5=$r->file('placeImage5');        
                            $image5->move('images',$image5->getClientOriginalName());                   
                            $imageName5=$image5->getClientOriginalName(); 
                            $places->image5=$imageName5;
                            }      

         $places->name=$r->placeName;
         $places->introduction=$r->placeIntroduction;
         $places->nearByArea=$r->placeNearByArea;
         $places->reviews=$r->placeReviews;
         $places->openHour=$r->placeOpenHour;
         $places->price=$r->placePrice;
         $places->CategoryID=$r->CategoryID;
         $places->address=$r->placeAddress;
         $places->bookingMethod=$r->placeBookingMethod;
         $places->contactNumber=$r->placeContactNumber;
         $places->map=$r->placeMap;
         $places->save();
 
         Return redirect()->route('showPlace');
     }

    public function placedetail($id){
            $places=Place::all()->where('id',$id);            
            return view('placeDetail')->with('places',$places);
    } 

    public function viewPlace(){
        $places=DB::table('places')
        ->leftjoin('categories','categories.id','=','places.CategoryID')
        ->select('places.*','categories.name as catName')
        ->get();
        return view('viewPlace')->with('places',$places);
    }

    public function searchPlace(){
        $r=request();
        $keyword=$r->keyword;
        $places=DB::table('places')
        ->leftjoin('categories','categories.id','=','places.CategoryID')
        ->select('places.*','categories.name as catName')
        ->where('places.name','like','%'.$keyword.'%')
        
        ->get();
        return view('viewPlace')->with('places',$places);
    }

    public function viewAttraction(){
       $places=DB::table('places')->where('CategoryID','=','1')
       ->leftjoin('categories','categories.id','=','places.CategoryID')
        ->select('places.*','categories.name as catName')
        ->get();
       return view('viewPlace')->with('places',$places);
    }

    public function viewHomeStay(){
        $places=DB::table('places')->where('CategoryID','=','2')
        ->leftjoin('categories','categories.id','=','places.CategoryID')
        ->select('places.*','categories.name as catName')
        ->get();
        return view('viewPlace')->with('places',$places);
    }

    public function viewIndoor(){
        $places=DB::table('places')->where('CategoryID','=','3')
        ->leftjoin('categories','categories.id','=','places.CategoryID')
        ->select('places.*','categories.name as catName')
        ->get();
        return view('viewPlace')->with('places',$places);
    }

    public function viewOutdoor(){
        $places=DB::table('places')->where('CategoryID','=','4')
        ->leftjoin('categories','categories.id','=','places.CategoryID')
        ->select('places.*','categories.name as catName')
        ->get();
        return view('viewPlace')->with('places',$places);
    }
}