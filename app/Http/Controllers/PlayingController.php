<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use GuzzleHttp;

class PlayingController extends Controller
{

    function __construct() {
        $this->client = new \GuzzleHttp\Client();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $response = $this->client->get('http://cloud-backend:5000/api/playing');
            $results = $response->getBody();
            $results = json_decode($results);

        } catch (Exception $e) {
            $message = 'Error: ' . $e->getCode() . ', message:' . $e->getMessage();
            error_log($message);
            return response()->json([
                'status' => 500,
                'message' => $message
            ]);
        };
        //return back();
        return view('playing.index', ['categories' =>  $results->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
                $response = $this->client->post('http://cloud-backend:5000/api/playing', [
                    GuzzleHttp\RequestOptions::JSON => [
                        'playerID' => $request->input('playerID'),
                        'schoolID' => $request->input('schoolID'),
                        'yearID' => $request->input('yearID')] 
                ]);
                $results = $response->getBody();
                $results = json_decode($results);
    
        } catch (Exception $e) {
            return back();
        };
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {

            $response = $this->client->get('http://cloud-backend:5000/api/playing/'.$id);
            $results = $response->getBody();
            $results = json_decode($results);

        } catch (Exception $e) {
            return back();
        };
        return view('playing.edit', ['category' =>  $results->data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $response = $this->client->put('http://cloud-backend:5000/api/playing/'.$id, [
                GuzzleHttp\RequestOptions::JSON => [
                    'playerID' => $request->input('playerID'),
                    'schoolID' => $request->input('schoolID'),
                    'yearID' => $request->input('yearID')] 
            ]);
            $results = $response->getBody();
            $results = json_decode($results);

        } catch (Exception $e) {
            error_log('Error: ' . $e->getCode() . ', message:' . $e->getMessage());
            return back();
        };
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $page, $id)
    {
        try {

            $response = $this->client->delete('http://cloud-backend:5000/api/playing/'.$id);
            $results = $response->getBody();
            $results = json_decode($results);

        } catch (Exception $e) {
            return back();
        };
        return back();
    }

    public function statistics()
    {
        try {

        } catch (Exception $e) {
            return back();
        };
        return back();
    }
}