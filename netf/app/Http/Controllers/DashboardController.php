<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\Films;
use App\Models\categories;
use App\Models\ratings;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $films = Auth::user()->film()->get();

        return view('dashboard', ['films' => $films]);
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
        return view('films.edit', ['categories'=> $category, 'ratings'=> $rating]);
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $film = Films::find($id);
        $category = categories::all();
        $rating = ratings::all();
        return view('films.edit', ['categories'=> $category, 'ratings'=> $rating])->with('film', $film);
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
        if($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = 'storage/imageUp';

            $img=$image->move($folder,$name.'.'.$image->getClientOriginalExtension());
        }

        $film = Films::where('id', $id);
        $film ->update([ 
                        'film_name' => $request->input('film_name'),
                        'description' => $request->input('description'),
                        'category' => $request->input('category'),
                        'rate' => $request->input('rate'),
                        'image' => $img??$film->image,
                        'duration' => $request->input('duration')
                        ]);

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('films')->where('id', '=', $id)->delete();

        return redirect('/dashboard');
    }
}
