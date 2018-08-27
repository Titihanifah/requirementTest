<?php

namespace App\Http\Controllers;

use App\Transaction;
use function compact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function redirect;


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
        $transaction->withPath('transaction');

        // redirect ke halaman index
//        return response()->json($transaction);
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


        // message success
        Session::flash('message', 'Success add data transaction.');
        // set redirect success
        return redirect('transaction');

    }

    // pagination with search
    public function paginate(Request $request)
    {
        $this->validate($request, [
            'limit' => 'integer',
        ]);

        $transaction = Transaction::when($request->keyword, function ($query) use ($request) {
            $query->where('name', 'like', "%{$request->keyword}%")
                ->orWhere('description', 'like', "%{$request->keyword}%");
        })->paginate($request->limit ? $request->limit : 10);

        $transaction->appends($request->only('keyword', 'limit'));

        return view('transaction.index', compact('transaction'));
    }

    // pagination with search
    public function category(Request $request)
    {
        $this->validate($request, [
            'limit' => 'integer',
        ]);

        $transaction = Transaction::when($request->category, function ($query) use ($request) {
            $query->where('category', $request->category);

        })->paginate($request->limit ? $request->limit : 10);

        $transaction->appends($request->only('keyword', 'limit'));

        return view('transaction.index', compact('transaction'));
    }

    // pagination with search
    public function date_paid(Request $request)
    {
        $this->validate($request, [
            'limit' => 'integer',
        ]);

        $transaction = Transaction::when($request->date_from,$request->to, function ($query) use ($request) {
            $query->where('date_paid', '>=', $request->date_from)
                ->orWhere('date_paid', '<=', $request->date_to);

        })->paginate($request->limit ? $request->limit : 10);

        $transaction->appends($request->only('keyword', 'limit'));

        return view('transaction.index', compact('transaction'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search() {

        $input = Input::get('search');
        $transaction = Post::where('name','LIKE',$input)->paginate(5);

        if (Request::ajax()) {
            return View::make('transaction.search')->withPosts($transaction);
        }
        return View::make('transaction.index')->withPosts($transaction);
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

//        return response()->json('success');
        // message success
        Session::flash('message', 'Success update data transaction.');

        // set redirect success
        return redirect('transaction');


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
        Session::flash('message', 'Success delete data transaction.');
        // set redirect to index
        return redirect('transaction');
    }

    // function soal tes logika
    public function hitung(){
        $uang = 1895250;

        $ratusanribu = floor($uang/100000);
        $limapuluhribu = floor(($uang%100000)/50000);
        $duapuluhribu = floor(($uang%50000)/20000);
        $limaribu = floor(($uang - (($duapuluhribu*20000)+($limapuluhribu*50000)+($ratusanribu*100000)))/5000);
        $seratus = floor(($uang%5000)/100);
        $limapuluh = floor(($uang%100)/50);

        echo 'Jumlah masing-masing uang pecahan yang akan diterima Budi : <br>';
        echo '100ribuan = ' .$ratusanribu. '<br>';
        echo '50ribuan = ' .$limapuluhribu. '<br>';
        echo '20ribuan = ' .$duapuluhribu. '<br>';
        echo '5ribuan = ' .$limaribu. '<br>';
        echo '100= ' .$seratus. '<br>';
        echo '50 = ' .$limapuluh. '<br>';
        $jumlah = ($ratusanribu	* 100000)+($limapuluhribu*50000)+($duapuluhribu	 * 20000)+($limaribu*5000)+($seratus*100)+($limapuluh*50);



    }

}
