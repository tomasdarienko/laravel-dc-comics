<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('main', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newcomic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //    'title' => 'required|max:40',
        //    'description' => 'required',
        //    'thumb' => 'required',
        //    'price' => 'required|max:7',
        //    'series' => 'required|max:40',
        //    'sale_date' => 'required|max:10',
        //    'type' => 'required|max:40',
        //    'artist' => 'required',
        //    'writers' => 'required',
        // ]);
        $form_data = $this-> validation($request->all());
        // $form_data = $request->all();

        $comic = new Comic();

        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = $form_data['artists'];
        $comic->writers = $form_data['writers'];

        $comic-> save();

        return redirect()->route('comics.index' ,compact('comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('single', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('modify', compact('comic'));
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

        // $request->validate([
        //     'title' => 'required|max:40',
        //     'description' => 'required',
        //     'thumb' => 'required',
        //     'price' => 'required|max:7',
        //     'series' => 'required|max:40',
        //     'sale_date' => 'required|max:10',
        //     'type' => 'required|max:40',
        //     'artist' => 'required',
        //     'writers' => 'required',
        //  ]);
        $form_data = $this-> validation($request->all());

        // $form_data = $request->all();
        $comic = Comic::find($id);
        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->artists = $form_data['artists'];
        $comic->writers = $form_data['writers'];

        $comic-> update();

        return redirect()->route('comics.index',['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data){
        $validator = Validator::make
        ($data, [
            'title' => 'required|max:40',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:7',
            'series' => 'required|max:40',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:40',
            'artist' => 'required',
            'writers' => 'required',
        ],[
            'title.required'=>'il titolo e obbligatorio',
            'title.max'=>'il titolo deve essere al massimo 40 caratteri',
            'description.required'=>'la descrizione e obbligatoria',
            'thumb.required'=>'l immagine e obbligatoria',
            'price.required'=>'il prezzo e obbligatorio',
            'price.max'=>'il prezzo e troppo grande',
            'series.required'=>'la serie e obbligatoria',
            'series.max'=>'la serie deve essere al massimo 40 caratteri',
            'sale_date.required'=>'la data e obbligatoria',
            'sale_date.max'=>'la data deve essere al massimo 10 caratteri',
            'type.required'=>'il tipo e obbligatorio',
            'type.max'=>'il tipo deve essere al massimo 40 caratteri',
            'artist.required'=>'l artista e obbligatorio',
            'writers.required'=>'lo scrittore e obbligatorio',
            
        ])->validate();

        return $validator;
    }
}
