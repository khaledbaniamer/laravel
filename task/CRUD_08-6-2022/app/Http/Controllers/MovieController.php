<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function view_movies()
    {
        $movies = Movie::all();
        return view('movies/home' , ['movies'=>$movies]);
    }
    public function add_movie(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'year'=>'required',
            'file'=>'required'
            
        ]);
        $image = $request->file('file')->storeAs('public/movies_image' , $request->file->getClientOriginalName());
        $movie = new Movie();
        $movie->movie_name = $request->name;
        $movie->movie_description = $request->description ;
        $movie->movie_gener = $request->year;
        if($image){

            $movie->movie_image = $request->file->getClientOriginalName();
        }

        $movie->save();
        return redirect('/add')->with('succ' , 'Movie has been addd successuflly');
    }

    public function edit_movie($id)
    {
        $single_movie = Movie::find($id);
        return view("movies/edit" , ['movie'=>$single_movie] );
    }

    public function update_movie(Request $request)
    {
        $id = $request->id;
        $hidden_image = $request->hidden_image;
        $movie = Movie::find($id);

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'year'=>'required'
            
            
        ]);
        if($request->file !=null)
        {

            $image = $request->file('file')->storeAs('public/movies_image' , $request->file->getClientOriginalName());
        }
        $movie->movie_name = $request->name;
        $movie->movie_description = $request->description ;
        $movie->movie_gener = $request->year;
        if(isset($image)){

            $movie->movie_image = $request->file->getClientOriginalName();
        }else
        {
            $movie->movie_image = $hidden_image;
        }

        $movie->save();

        return redirect("/edit/$id")->with('edit' , 'Movie has been updated successuflly');
    }

    public function delete_movie($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return redirect('home')->with('delete' , 'Movie has been delete successuflly');
    }

    public function view_movie($id)
    {
        $movie=Movie::find($id);
        return view('movies/view_movie' , ['movie'=>$movie]);
    }
}
