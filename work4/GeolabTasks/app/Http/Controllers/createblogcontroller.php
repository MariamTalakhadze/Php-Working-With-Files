<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
Use \Carbon\Carbon;
class createblogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=DB::table('blog')->select('id','name', 'lastname', 'pn', 'isPublish')
                            ->where('id','>' ,5)
                                ->where('isPublish',1)
                                    ->get();
        dd($users);
    }
    public function date(){
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now()->endOfMonth();
        // dd($start . $end);
        $dbdate= DB::table('blog')->select('created_at')
                        ->whereBetween('created_at', [$start, $end] )->get();
        dd($dbdate);
    }
    public function in(){
        $select= DB::table('blog')
                ->whereIn('id', [1,5,19])
                    ->get();
        dd($select);
    }
    public function deleted(){
        $deletedat= DB::table('blog')->where('deleted_at', '!=', null)->get();
        dd($deletedat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $how= mt_rand(1,10);
       $numberofrows=0;
       for($i=0; $i<$how; $i++){
            $nameg=Str::random(5);
            $lastnameg=Str::random(10);
            $png=mt_rand(00000000000, 999999999);
            $ispg=mt_rand(0,1);
            $date = Carbon::now();
            $deletedate=null;
            if($ispg==0){
                $deletedate=Carbon::now();
            }
            DB::table('blog')->insert(
                ['name'=>$nameg,'lastname'=>$lastnameg, 'pn'=>$png, 'isPublish'=>$ispg, 'created_at'=>$date, 'deleted_at'=>$deletedate]
            );
        $numberofrows+=1;
       }
       echo $numberofrows ."inserted ";
       

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
}
