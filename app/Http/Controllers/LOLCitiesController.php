<?php namespace App\Http\Controllers;

use App\Models\LOLCities;
use Illuminate\Routing\Controller;

class LOLCitiesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /lolcities
     *
     * @return Response
     */
    public function index()
    {
        echo "Cities";
        //return HBCities::all();
    }


    public function form()
    {
        return view('content.form_city');
    }
    public function addCity (  )
    {
        //dd($_POST);
        //echo $_POST['city'];
        //dd(request()->ToArray());
        //dd(request()->all());
        //dd($data);
        $data = request()->all();
        $record = LOLCities::create ([
            'name' => $data['city'],
        ]);
        return view('content.form_city', $record->toArray());
        //return view('content.form_city');
    }

    /**
     * Show the form for creating a new resource.
     * GET /lolcities/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /lolcities
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /lolcities/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /lolcities/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /lolcities/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /lolcities/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}