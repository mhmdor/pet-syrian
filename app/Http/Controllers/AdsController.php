<?php

namespace App\Http\Controllers;

use App\Http\Requests\adsRequest;
use App\Image;
use App\Models\Ads;
use App\Models\Comment;
use App\Traits\OfferTrait;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;


class AdsController extends Controller
{
    public function __construct()
    {
    }
    use OfferTrait;

    public function index()
    {

        return view('Ads.dashboard');
    }

    public function ads()
    {
        $ads = Ads::where([['type', '!=', 'Accessories']])->get();

        return view('Ads.ads')->with('ads', $ads);
    }
    public function adsact()
    {
        $ads = Ads::where([['type', '!=', 'Accessories'], ['act', 1]])->get();

        return view('Ads.ads1')->with('ads', $ads);
    }
    public function adsdeact()
    {
        $ads = Ads::where([['type', '!=', 'Accessories'], ['act', 0]])->get();

        return view('Ads.ads1')->with('ads', $ads);
    }

    public function adsAnmdeact()
    {
        $ads = Ads::where([['type', '=', 'Accessories'], ['act', 0]])->get();

        return view('Ads.ads1')->with('ads', $ads);
    }

    public function adsAnmact()
    {
        $ads = Ads::where([['type', '=', 'Accessories'], ['act', 1]])->get();

        return view('Ads.ads1')->with('ads', $ads);
    }

    public function adsAnm()
    {
        $ads = Ads::where([['type', '=', 'Accessories']])->get();

        return view('Ads.ads')->with('ads', $ads);
    }

    public function user()
    {
       
        $users = User::all();
        return view('Ads.user', compact('users'));
    }




    public function adstrashed()
    {
      
        $ads = Ads::onlyTrashed()->get();
        $ads1 = ' Delete ADS';
        return view('Ads.trashed', compact( 'ads1'))->with('ads', $ads);
    }

  




    public function create()
    {


        return view('Ads.create');
    }


    public function createAccessories()
    {
        return view('Ads.create_accessories');
    }

    public function storeAccessories(adsRequest $request)
    {
        $file_name =  $this->saveimage($request->photo, 'upload/photo/ads');

        $ads = Ads::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'type' => $request->type,
            'Description' => $request->Description,
            'city' => $request->city,
            'price' => $request->price,
            'photo' => $file_name,
            'slug' => $request->slug,

        ]);


        if ($files = $request->file('images')) {

            foreach ($files as $file) {
                $name = $file->hashName();
                $file->move(public_path('imageTest/'), $name);
                Image::insert([
                    'url' => 'public/imageTest/' . $name,
                    'ads_id' => $ads->id,
                    'status' => 1,
                ]);
            }
        }


        if($files = $request->file('images_p'))
        {
            foreach($files as $file){
                $name = $file->hashName();
                $file->move();
            }
        }








        return redirect()->route('home')->with('message', ' Thank You , Waiting for admin approval !');
    }

    public function store(adsRequest $request)
    {

        $file_name =  $this->saveimage($request->photo, 'upload/photo/ads');




        $ads = Ads::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'type' => $request->type,
            'Description' => $request->Description,
            'city' => $request->city,
            'old' => $request->old,
            'country' => $request->country,
            'price' => $request->price,
            'photo' => $file_name,
            'slug' => str_slug($request->title),

        ]);


        
        if ($files = $request->file('images')) {

            foreach ($files as $file) {
                $name = $file->hashName();
                $file->move(public_path('imageTest/'), $name);
                Image::insert([
                    'url' => 'public/imageTest/' . $name,
                    'ads_id' => $ads->id,
                    'status' => 1,
                ]);
            }
        }


        if ($files = $request->file('images_p')) {

            foreach ($files as $file) {
                $name = $file->hashName();
                $file->move(public_path('imageTest/'), $name);
                Image::insert([
                    'url' => 'public/imageTest/' . $name,
                    'ads_id' => $ads->id,
                    'status' => 2,
                ]);
            }
        }


        return redirect()->route('home')->with('message', ' Thank You , Waiting for admin approval !');
    }

    public function show($id)
    {

        $ads = Ads::find(decrypt($id));
        $id1 = $ads->user_id;
        $user = User::find($id1);
        $images = Image::where([['ads_id', decrypt($id)], ['status', 1]])->get();
        $images_p = Image::where([['ads_id', decrypt($id)], ['status', 2]])->get();

        $users = User::all();
        $comments = $ads->comment;
        return view('single_post')->with([
            'ads' => $ads,
            'images' => $images,
            'images_p' => $images_p,
            'comments' => $comments,
            'user' => $user,
        ]);
    }

    public function alltype($type)
    {
        $ads1 = $type;

        $ads = Ads::where('type', $type)->orderBy("id", "DESC")->where('act', 1)->get();

        return view('category', compact('ads1'))->with('ads', $ads);
    }


    public function userADS($user_id)
    {
        $user = User::find($user_id);
        $ads = $user->ads;
        return view('ads.show', compact('ads'));
    }

    public function myADs()
    {
        $ads1 = 'MyAds';
        $user = Auth::user();
        $ads = $user->ads;
        return view('ads.showMy', compact('ads', 'ads1'));
    }


    public function edit($id)
    {



        $id =  Crypt::decrypt($id);
        $ads = Ads::find($id);
        return view('Ads.edit')->with('ads', $ads);
    }


    public function update(Request $request, $id)
    {
        $ads = Ads::find($id);

        if ($request->has('photo')) {
            $file_name =  $this->saveimage($request->photo, 'upload/photo/ads');
            $ads->photo = $file_name;
        }
        $ads->title = $request->title;
        $ads->type = $request->type;
        $ads->Description = $request->Description;
        $ads->city = $request->city;
        $ads->price = $request->price;
        $ads->old = $request->old;
        $ads->country = $request->country;

        $ads->update();
        return redirect()->route('home')->with('message', ' Succes
        ');
    }


    public function destroy($id)
    {
        $ads = Ads::find($id);
        $ads->delete();
        return redirect()->back()->with('message', 'Delete Success');
    }

    public function hdelete($id)
    {
        $ads = Ads::withTrashed()->where('id', $id)->first();
        $ads->forceDelete();
        return redirect()->back()->with('message', 'Delete Success');
    }

    public function restore($id)
    {
        $ads = Ads::withTrashed()->where('id', $id)->first();
        $ads->restore();
        return redirect()->back()->with('message', 'Restore Success');
    }

    public function fav($id)
    {


        $user = Auth::user();
        $user->ads1()->syncWithoutDetaching($id);


        return redirect()->back()->with('message', 'Added To Fav Success');
    }



    public function getfav()
    {
        $ads1 = 'Favorite';
        $user = Auth::user();
        $ads = $user->ads1;
        return view('ads.show', compact('ads', 'ads1'));
    }

    public function act($id)
    {
        $ads = Ads::find($id);
        $ads->act = 1;
        $ads->update();
         return redirect()->back()->with('message', 'Active Success');
    }
    public function dact($id)
    {
        $ads = Ads::find($id);
        $ads->act = 0;
        $ads->update();
         return redirect()->back()->with('message', 'DActive Success');
    }

    public function comment(Request $request)
    {

        $ads = $request->ads_id;
        Comment::create([
            'user_id' => Auth::id(),
            'ads_id' => $ads,
            'comments' => $request->comment,
        ]);
        return redirect()->back()->with('message', 'Added To Fav Success');
    }

    public function com()
    {
          $comments = Comment::all();
          return view('ads.comment',compact('comments'));
    }

    public function deletecom($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('message', 'Delete Success');
    }
}
