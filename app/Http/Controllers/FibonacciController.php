<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Functions\Fibonacci;
use Storage;

class FibonacciController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$disk = Storage::disk('local');
		$files = $disk->files('/');

		$return = [];

		$aux = null;

		for ( $i = 0; $i < count($files); $i++ ) { 
			if( is_numeric( $files[$i] ) ){
				$aux['fibonacci'] = $files[$i];
				$aux['allValues'] = Fibonacci::fibonacciObject( $files[$i] );
				array_push( $return , $aux );
			}
		}

		return response()->json( $return );
		
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $req)
	{
		$num = $req->input('num', null );
		if( is_numeric($num) && $num >= 0 && $num <= 100  ){
			$disk = Storage::disk('local');
			$disk->put($num, '');
			return response()->json( "OK" );
		}
		else
			return response()->json("Bad Request", 400);

		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if( is_numeric($id) && $id >= 0 && $id <= 100  )
			return response()->json( Fibonacci::fibonacciObject( $id ) );
		else
			return response()->json("Bad Request", 400);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$disk = Storage::disk('local');

		if( $disk->exists($id) ){
			$disk->delete($id);
			return response()->json( "OK" );
		}
		else
			return response()->json("Bad Request", 400);
	}

}
