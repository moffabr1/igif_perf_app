<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class AdminClubsController extends Controller
{

    private $limit = 10;

    public function autocomplete(Request $request)
    {
        if ($request->ajax())
        {
            return Club::select(['id', 'club_name as value'])->where(function($query) use ($request) {

                if ( ( $term = $request->get("term")) ) {

                    $keywords = '%' . $term . '%';
                    $query->orWhere("club_name", 'LIKE', $keywords);
//                    $query->orWhere("city_name", 'LIKE', $keywords);
//                    $query->orWhere("state_province_name", 'LIKE', $keywords);
                }
            })
                ->orderBy('club_name', 'asc')
                ->take(5)
                ->get();
        }
    }


    public function index(Request $request)
    {

        // ORIGINAL WORKING CODE
        //        $clubs = Club::all();
        //        $courses = Course::all();
        //        $scorecards = Scorecard::all();
        //
        //        return view('igif.admin.clubs.index', compact('clubs', 'courses', 'scorecards'));
        //END ORIGINAL WORKING CODE

        $clubs = Club::where(function($query) use ($request) {

            if ( ( $term = $request->get("term")) ) {

                $keywords = '%' . $term . '%';
                $query->orWhere("club_name", 'LIKE', $keywords);
                $query->orWhere("city_name", 'LIKE', $keywords);
                $query->orWhere("state_province_name", 'LIKE', $keywords);
            }

        })

            ->orderBy('club_name', 'asc')
            ->paginate($this->limit);


        return view('igif.admin.clubs.index', compact('clubs'));
    }


    public function create()
    {
        return view('igif.admin.clubs.create');
    }

    public function store(Request $request)
    {
        //
    }


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
