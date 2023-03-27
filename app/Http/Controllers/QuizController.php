<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['quiz'] = DB::table('quiz')
            ->join('type_scores', 'quiz.type_score_id', '=', 'type_scores.type_score_id')
            ->select('quiz.quiz_id', 'quiz.quiz_name', 'quiz.type_score_id', 'type_scores.type_score_name_en')
            ->get()->shuffle();
        // ->paginate(4);

        // $data['quiz'] = json_decode($data['quiz']);


        // echo '<pre>';   print_r($data);   echo '<pre>';   exit;
        return view('quiz.quizpage', ['data' => $data]);
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

    public function result(Request $request)
    {
        // $data = $request->post();
        $data['1'] = $request->post('Naturalistic');
        $data['2'] = $request->post('Intrapersonal');
        $data['3'] = $request->post('Interpersonal');
        $data['4'] = $request->post('Musical');
        $data['5'] = $request->post('Bodily-Kinesthetic');
        $data['6'] = $request->post('Spatial');
        $data['7'] = $request->post('Logical-Mathematical');
        $data['8'] = $request->post('Linguistic');

        $i = 1;
        foreach ($data as $val) {
            $data[$i]['total'] = array_sum($val);

            $data['result_scores'][$i]['total'] = array_sum($val);
            $data['result_scores'][$i]['type_scores'] = DB::table('type_scores')
                ->where('type_score_id', $i)
                ->select('type_score_id', 'type_score_name_th', 'type_score_name_en')
                ->get();

            $data['top_sum'][$i] = array_sum($val);

            if ($data['top_sum'][$i] < 9) {
                unset($data['top_sum'][$i]);
            }
            $i++;
        }

        arsort($data['top_sum']);



        $query = DB::table('careers')
            ->join('category_careers', 'careers.category_career_id', '=', 'category_careers.category_career_id')
             ->select('category_careers.category_career_name', 'careers.career_name_th', 'careers.score_naturalistic', 'careers.score_intrapersonal', 'careers.score_interpersonal', 'careers.score_musical', 'careers.score_bodily_kinesthetic', 'careers.score_spatial', 'careers.score_logical_mathematical', 'careers.score_linguistic');

        if (isset($data['top_sum']['1'])) {
            // $query->orwhere('careers.score_naturalistic', 'like',  '%' . $data['top_sum']['1'] . '%');
            // if ($data['top_sum']['1'] >= 12) {
            //     $query->orwhere('careers.score_naturalistic', '=', 12);   
            // } else if ($data['top_sum']['1'] < 12) {
            //     $query->orwhere('careers.score_naturalistic', '=', 9);
            // }
        }
        if (isset($data['top_sum']['2'])) {
            // $query->orwhere('careers.score_intrapersonal', 'like',  '%' . $data['top_sum']['2'] . '%');
            // if ($data['top_sum']['2'] >= 12) {
            //     $query->orwhere('careers.score_intrapersonal', '=', 12);
            // } else if ($data['top_sum']['2'] < 12) {
            //     $query->orwhere('careers.score_intrapersonal', '=', 9);
            // }
            
        }
        if (isset($data['top_sum']['3'])) {
            // $query->orwhere('careers.score_interpersonal', 'like',  '%' . $data['top_sum']['3'] . '%');
            // if ($data['top_sum']['3'] >= 12) {
            //     $query->orwhere('careers.score_interpersonal', '=', 12);
            // } else if ($data['top_sum']['3'] < 12) {
            //     $query->orwhere('careers.score_interpersonal', '=', 9);
            // }
           
        }
        if (isset($data['top_sum']['4'])) {
            // $query->orwhere('careers.score_musical', 'like',  '%' . $data['top_sum']['4'] . '%');
            // if ($data['top_sum']['4'] >= 12) {
            //     $query->orwhere('careers.score_musical', '=', 12);
            // } else if ($data['top_sum']['4'] < 12) {
            //     $query->orwhere('careers.score_musical', '=', 9);
            // }
          
        }
        if (isset($data['top_sum']['5'])) {
            // $query->orwhere('careers.score_bodily_kinesthetic', 'like',  '%' . $data['top_sum']['5'] . '%');
            // if ($data['top_sum']['5'] >= 12) {
            //     $query->orwhere('careers.score_bodily_kinesthetic', '=', 12);
            // } else if ($data['top_sum']['5'] < 12) {
            //     $query->orwhere('careers.score_bodily_kinesthetic', '=', 9);
            // }
            
        }
        if (isset($data['top_sum']['6'])) {
            // $query->orwhere('careers.score_spatial', 'like',  '%' . $data['top_sum']['6'] . '%');
            // if ($data['top_sum']['6'] >= 12) {
            //     $query->orwhere('careers.score_spatial', '=', 12);
            // } else if ($data['top_sum']['6'] < 12) {
            //     $query->orwhere('careers.score_spatial', '=', 9);
            // }
           
        }
        if (isset($data['top_sum']['7'])) {
            // $query->orwhere('careers.score_logical_mathematical', 'like',  '%' . $data['top_sum']['7'] . '%');
            // if ($data['top_sum']['7'] >= 12) {
            //     $query->where('careers.score_logical_mathematical', '=', 12);
            // } else if ($data['top_sum']['7'] < 12) {
            //     $query->where('careers.score_logical_mathematical', '=', 9);
            // }
           
        }
        if (isset($data['top_sum']['8'])) {
            // $query->orwhere('careers.score_linguistic', 'like',  '%' . $data['top_sum']['8'] . '%');
            // if ($data['top_sum']['8'] >= 12) {
            //     $query->where('careers.score_linguistic', '=', 12);
            // } else if ($data['top_sum']['8'] < 12) {
            //     $query->where('careers.score_linguistic', '=', 9);
            // }
          
        }

        $data['result_careers'] = $query->get();

        // $x = 0;
        // foreach ($data['result_careers'] as $val) {
        //     $data['result_career'][$x] = $val->category_career_name;
        //     $x++;
        // }
        // $data['result_career'] = array_unique($data['result_career']);
        // sort($data['result_career']);


        // echo '<pre>';   print_r($data);   echo '<pre>';   exit;
        return view('quiz.quizresult', ['data' => $data]);
    }
}
