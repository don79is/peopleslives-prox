<?php namespace App\Http\Controllers;

use App\Models\LOLCities;
use App\Models\LOLHobbies;
use App\Models\LOLPeoples;
use App\Models\LOLPeoplesHobbiesConnections;
use Illuminate\Routing\Controller;

class LOLPeoplesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /lolpeoples
	 *
	 * @return Response
	 */
	public function index()
	{


	}
    public function form()
    {
        $configuration ['cities'] = LOLCities::get()->pluck('name','id')->toArray();
        $configuration ['hobbies'] = LOLHobbies::get()->pluck('name','id')->toArray();

        return view('content.form_person', $configuration);
    }


    public function addPerson ()
    {
        //dd($_POST);
        //echo $_POST['city'];
        //dd(request()->ToArray());
        //dd(request()->all());
        $data = request()->all();

        dd($data);


        $record = LOLPeoples::create ([
            "name" => $data["person"],
            "phone" => $data["phone"],
            "email" => $data["email"],
            "cities_id" => $data["city"]
        ]);

        foreach ($data["hobbies"] as $hobby){
        LOLPeoplesHobbiesConnections::create([
            'lol_peoples_id' => $record['id'],
            'lol_hobbies_id'=> $hobby
        ]);
    }




        $record ['cities'] = LOLCities::get()->pluck('name','id')->toArray();
        $record ['hobbies'] = LOLHobbies::get()->pluck('name','id')->toArray();
        return view('content.form_person', $record->toArray());
        //return view('content.form_person');
    }
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /lolpeoples
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /lolpeoples/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /lolpeoples/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /lolpeoples/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /lolpeoples/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}