<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FinanceRequest;
use App\Models\Finance;
use App\Imports\FinanceImport;
use Maatwebsite\Excel\Facades\Excel;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finances = Finance::latest()->paginate(100);

        return view('finances.index',compact('finances'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finances.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FinanceRequest $request)
    {
        Excel::import(new FinanceImport, request()->file('file'));
        
        return back()->withStatus('Planilha enviada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Finance $finance)
    {
        return view('finances.show',compact('finance')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Finance $finance)
    {
        return view('finances.form',compact('finance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FinanceRequest $request, Finance $finance)
    {
        $finance->update($request->all());
    
        return redirect()->route('finances.index')
                        ->with('success','Finanças atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finance $finance)
    {
        $finance->delete();
    
        return redirect()->route('finances.index')
                        ->with('success','Finança destruida com sucesso');
    }
}
