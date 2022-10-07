<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller {

    public function index(){
        $comics = Comic::all();

        foreach($comics as $comic){
            $comic->description = substr($comic->description, 0, 40) . ' ...';
        }

        return view('comics.index', compact('comics'));
    }

    public function create(){
        return view('comics.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->save();

        return redirect()->route('comics.index');
    }

    public function show(Comic $comic){
        return view('comics.show', compact('comic'));
    }

    public function edit(Comic $comic){
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic){
        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    public function destroy($id){
        //
    }
}
