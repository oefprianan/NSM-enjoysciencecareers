<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CareerlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['careers_detail_main'] = DB::table('careers_detail_main')
            ->join('category_careers', 'careers_detail_main.category_career_id', '=', 'category_careers.category_career_id')
            ->join('careers', 'careers_detail_main.career_id', '=', 'careers.career_id')
            ->select(
                'careers_detail_main.career_detail_main_id',
                'careers_detail_main.career_detail_character',
                'careers.career_id',
                'careers.category_career_id',
                'careers.career_name_th',
                'careers.career_name_en',
                'category_careers.category_career_name'
            )
            // ->where('careers_detail_main.category_career_id', '=', 1)
            ->get();
        // ->paginate(8);

        $data['category_careers'] = DB::table('category_careers')
            ->select('category_career_id', 'category_career_name',)
            ->get();

        // echo '<pre>';        print_r($data);        echo '<pre>';        exit;
        return view('careerlist.index', ['data' => $data]);
    }


    function action(Request $request)
    {
        $category_career_id = $request->get('category_career_id');
        if ($request->ajax()) {
            $output = '';
            $data = DB::table('careers_detail_main')
                ->join('category_careers', 'careers_detail_main.category_career_id', '=', 'category_careers.category_career_id')
                ->join('careers', 'careers_detail_main.career_id', '=', 'careers.career_id')
                ->select(
                    'careers_detail_main.career_detail_main_id',
                    'careers_detail_main.career_detail_character',
                    'careers.career_id',
                    'careers.category_career_id',
                    'careers.career_name_th',
                    'careers.career_name_en',
                    'category_careers.category_career_name'
                )
                ->where('careers_detail_main.category_career_id', 'like', '%' . $category_career_id . '%')
                ->get();


            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $value) {
                    $output .= '
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12 mb-3" >
                    <a href="' . url("/careerdetail/" . $value->career_detail_main_id) . '">
                        <div class="card">
                            <img src="' . asset($value->career_detail_character) . '" class="img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-text">' . $value->career_name_th . '<br>' . $value->career_name_en . '</h5>
                            </div>
                        </div>
                    </a>
                </div>
        ';
                }
            } else {
                $output = '';
            }
            $data = array(
                'query_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $main = DB::table('careers_detail_main')
            ->join('category_careers', 'careers_detail_main.category_career_id', '=', 'category_careers.category_career_id')
            ->join('careers', 'careers_detail_main.career_id', '=', 'careers.career_id')
            ->select(
                'careers_detail_main.career_detail_main_id',
                'careers_detail_main.career_id',
                'careers.career_name_th',
                'careers.career_name_en',
                'careers_detail_main.category_career_id',
                'category_careers.category_career_name',
                'careers_detail_main.career_detail_salary',
                'careers_detail_main.career_detail_job_description',
                'careers_detail_main.career_detail_tools',
                'careers_detail_main.career_detail_hard_skills',
                'careers_detail_main.career_detail_soft_skills',
                'careers_detail_main.career_detail_characteristic',
                'careers_detail_main.career_detail_work_together',
                'careers_detail_main.career_detail_progress',
                'careers_detail_main.career_detail_vdo',
                'careers_detail_main.career_detail_character',
                'careers_detail_main.career_detail_visual_note',
                'careers_detail_main.career_detail_cover',
            )
            ->where('careers_detail_main.career_detail_main_id', '=', $request->id)
            ->get();


        $i = 0;
        foreach ($main as $val) {
            $data['careers_detail_main'][$i] = $val;
            $data['careers_detail_main'][$i]->responsibility  =  DB::table('careers_detail_responsibility')
            ->where('careers_detail_responsibility.career_detail_main_id', '=', $request->id)
            ->select(
                'career_detail_responsibility'
            )
            ->get();
            $data['careers_detail_main'][$i]->education  =  DB::table('careers_detail_education')
            ->where('careers_detail_education.career_detail_main_id', '=', $request->id)
            ->select(
                'career_detail_education_id','career_detail_education_faculty','career_detail_education_major'
            )
            ->get();
            $data['careers_detail_main'][$i]->career_resemble  =  DB::table('careers_detail_career_resemble')
                ->where('careers_detail_career_resemble.career_detail_main_id', '=', $request->id)
                ->select(
                    'career_detail_career_resemble'
                )
                ->get();

                $data['careers_detail_main'][$i]->work_place  =  DB::table('careers_detail_work_place')
                ->where('careers_detail_work_place.career_detail_main_id', '=', $request->id)
                ->select(
                    'career_detail_work_place_id','career_detail_work_place'
                )
                ->get();
            $i++;
        }

        // echo '<pre>';  print_r($main);  echo '<pre>';  exit;

        return view('careerlist.detail', ['data' => $data]);
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
