<?php namespace App\Http\Controllers;

use App\Models\LOLHobbies;
use Illuminate\Routing\Controller;

class LOLHobbiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /lolhobbies
	 *
	 * @return Response
	 */
	public function index()
	{echo 'hobbies';
	}

    public function form()
    {
        return view('content.form_hobby');
    }
    public function addHobby (  )
    {
        //dd($_POST);
        //echo $_POST['city'];
        //dd(request()->ToArray());
        //dd(request()->all());
        //dd($data);
        $data = request()->all();

        $record = LOLHobbies::create ([
            'name' => $data['hobby'],
        ]);

        return view('content.form_hobby', $record->toArray());
        //return view('content.form_city');
    }
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /lolhobbies/{id}
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
	 * GET /lolhobbies/{id}/edit
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
	 * PUT /lolhobbies/{id}
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
	 * DELETE /lolhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}