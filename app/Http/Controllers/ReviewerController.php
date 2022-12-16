<?php

namespace App\Http\Controllers;

use App\Models\Reviewer;
use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\DB as DB;

class ReviewerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviewer = Reviewer::orderBy('created_at','desc')->get();
        return view('reviewer.index')->with('reviewer',$reviewer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviewer.reviewerCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|email',
            'organization' => 'required|string',
            'position' => 'required|string'
        ]);
        $reviewer = new Reviewer;
        $reviewer->name = $request->name;
        $reviewer->email = $request->email;
        $reviewer->organization = $request->organization;
        $reviewer->position = $request->position;
        $reviewer->save();

        return redirect('admin/reviewers')->with('success','Reviewer Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = DB::table('assigns')
                  ->join('reviewers','reviewers.id','=','assigns.reviewer_id')
                  ->join('journals','journals.id','=','assigns.journal_id')
                  ->join('users','journals.user_id','=','users.id')
                  ->where('assigns.reviewer_id', '=',$id)
                  ->select('users.name as uname', 'journals.title as jtitle', 'assigns.status as status')
                  ->orderBy('assigns.created_at', 'desc')
                  ->get();

      $reviewer = Reviewer::find($id);
      return view('reviewer.reviewerShow', compact('reviewer', 'details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviewer = Reviewer::find($id);
        return view('reviewer.reviewerEdit')->with('reviewer', $reviewer);
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
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'organization' => 'required|string',
            'position' => 'required|string'
          ]);

            //edit post and store in database
            $reviewer = Reviewer::find($id);
            $reviewer->name = $request->input('name');
            $reviewer->email = $request->input('email');
            $reviewer->organization = $request->input('organization');
            $reviewer->position = $request->input('position');
            $reviewer->save();
            return redirect('/admin/reviewers')->with('success','Reviewer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reviewer = Reviewer::find($id);
        $reviewer->delete();
        return redirect('/admin/reviewers')->with('success', 'Reviewer deleted');
    }
}
