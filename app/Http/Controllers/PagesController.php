<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Myclasses\Customclasses\TMDb;
use Psy\Util\Json;

class PagesController extends Controller
{

    public function results(Requests\SearchFormRequest $request){
        $searchterm = $request->input('movie');
        $title=$searchterm;

        $apikey = '&api_key=f6aefca82fe53aaceea53aad7143be63';
        $url='http://api.themoviedb.org/3/';
        $mode='search/movie?query=';
        $movie_url=$url.$mode.$title.$apikey;
        $specifurl='https://www.themoviedb.org/movie/';
        $configurl = 'http://api.themoviedb.org/3/configuration?'.$apikey;

        $movies_json=file_get_contents($movie_url);
        $config_json=file_get_contents($configurl);

        $movies_array=json_decode($movies_json, true);
        $config_array=json_decode($config_json, true);

        return view('results',compact('movies_array','config_array','specifurl'));




       /* $urlpath= 'https://api.themoviedb.org/3/movie/550?api_key=';

        $size="";
        $filepath="";
        $imageurl=$urlpath.$size.$filepath;
        $mode = 'search/movie?query=';
        $movieName='';

        if ($searchterm){

            $movieName = DB::table('products');
            $results = $movieName->where('name', 'LIKE', '%'. $searchterm .'%')
                ->get();

            return view('results')->with('results', $results);

        }*/
    }
}
