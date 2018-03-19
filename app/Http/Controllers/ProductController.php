<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; // ini include modelnya
//use Datatables; //call datatable library
use Yajra\Datatables\Datatables;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return view('product.index',['title'=>'List Product','product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.form',['title'=>'Create Product','action'=>'store']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        $this->validate($request,[
                'nama'=>'required|max:10|min:5',
                'stok'=>'required|min:1',
                'harga'=>'required|min:1'
        ]);
        $file = $request->file('gambar');
        // // echo 'File Name: '.$file->getClientOriginalName();
        // // echo 'File Extension: '.$file->getClientOriginalExtension();  //Display File Extension
        // // echo 'File Size: '.$file->getSize(); //Display File Size
        // // echo 'File Mime Type: '.$file->getMimeType();
        // //Move Uploaded File
        $path = 'uploads';
        $nama_file=date('YmdHis').$file->getClientOriginalName();
        $file->move($path,$nama_file);

        $product=new Product;
        $product->nama=$request->nama;
        $product->satuan=$request->satuan;
        $product->stok=$request->stok;
        $product->harga=$request->harga;
        $product->deskripsi=$request->deskripsi;
        $product->gambar= $nama_file;
        $product->save(); // this is elequent;
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product= Product::find($id);
        return view('product.form',['action'=>'delete','product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= Product::find($id);
        return view('product.form',['action'=>'update','product'=>$product]);
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
        $product= Product::find($id);
        $product->nama=$request->nama;
        $product->satuan=$request->satuan;
        $product->stok=$request->stok;
        $product->harga=$request->harga;
        $product->deskripsi=$request->deskripsi;
        $product->save(); // this is elequent;
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::find($id);
        $product->delete(); // this is elequent;
        return redirect('/product');
    }

    public function indexproduct(){
        return view('product.datatableproduct');
     }
    public function getproduct(){
      // $product = Product::select('*')->get();
       //return $product;
    //    return Datatables::of($product)->make(true);

    //    return Datatables::of($product)->editColumn('user_id',function($product){
    //        return $product->name.''.$product->stok;
    //    })->make(true);

        $product=Product::select(['id','nama','stok','deskripsi','harga','satuan']);
       return Datatables::of($product)->addColumn('action',function($product){
            '<a href="#edit-'.$product->id.'" class="btn btn-xs btn-primary">edit</a>';
       })->editColumn('id','aaaID : {{ $id }}')->removeColumn('password','{{ $id }}')->make(true);

    }

    public function ajax_get_data()
    {
        $msg = "AWESOME !! This is a simple message returning from AJAX post.this send via ajax.AWESOME !! This is a simple message returning from AJAX post.this send via ajax.AWESOME !! This is a simple message returning from AJAX post.this send via ajax.";
        return response()->json(array('msg'=> $msg), 200);
    }
}
