<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all data transactions
        $transaction = Transaction::paginate(10);
//        dd($transaction);

        // redirect ke halaman index
        return view('transaction.index',compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // redirect halaman tambah data
        return view('transaction.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // function create new object
    public function store(Request $request)
    {
        // use validate
        $this->validate($request, [
            'description' => 'required',
            'date_paid' => 'required',
            'category' => 'required',
            'name' => 'required',
            'nominal' => 'required',

        ]);

        // create new object Transaction
        $transaction = new Transaction;
        // fill the object
        $transaction->description = $request->description;
        $transaction->category = $request->category;
        $transaction->nominal = $request->nominal;
        $transaction->date_paid = $request->date_paid;
        $transaction->name = $request->name;

        // save object to database
        $transaction->save();

        return response()->json('success');

        // message success
//        Session:flash('message', 'Success add data transaction.');
        // set redirect success
//        return redirect('transaction/index');

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
        // find data based id
        $transaction = Transaction::find($id);
        // redirect halaman edit
        return view('transaction.edit', compact('transaction'));
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
        // find data based id
        $transaction = Transaction::find($id);
        // fill the object
        $transaction->description = $request->description;
        $transaction->category = $request->category;
        $transaction->nominal = $request->nominal;
        $transaction->date_paid = $request->date_paid;
        $transaction->name = $request->name;

        // save object to database
        $transaction->save();

        return response()->json('success');
        // message success
        Session::flash('message', 'Success update data transaction.');
        // set redirect success
        return view('transaction.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data based id
        Transaction::destroy($id);
        // message success
//        Session:flash('message', 'Success delete data transaction.');
        // set redirect to index
//        return redirect('transaction/index');
    }
}
