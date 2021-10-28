<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Films;
use App\Models\categories;
use App\Models\ratings;
use Illuminate\Support\Str;

class FilmsController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('edit');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $films = DB::table('films')->get();

     return view('films.view', ['films' => $films]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = categories::all();
        $rating = ratings::all();
        return view('films.create', ['categories'=> $category, 'ratings'=> $rating]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userid = Auth::user()->id;
        if($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = 'storage/imageUp';

            $img=$image->move($folder,$name.'.'.$image->getClientOriginalExtension());
        }
         $request['user_id'] = $userid;
          $film = Films::create([
            'user_id' => $userid,
            'film_name' => $request->input('name'),
            'description' => $request->input('purpose'),
            'category' => $request->input('category'),
            'rate' => $request->input('rating'),
             'image' => $img,
            'duration' => $request->input('duration'),
        ]);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $campaign = Campaign::all();
        // $payement = payement_geteway::all();
        // return view('campaigns.make-donation', ['campaign' => $campaign, 'payements'=> $payement]);
        
        
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
    // public function cat($id)
    // {
    //     $category = categories::all();
    //     return view('campaigns.create', ['categories'=> $category]);
         
    // }
     
     
}
