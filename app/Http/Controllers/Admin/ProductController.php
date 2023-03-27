<?php

namespace App\Http\Controllers\Admin;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hidangan = product::all();
        return view('pages.admin.product.main', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            $item = new Product;
            $file = $request->file('image');
            $namafile = $file->getClientOriginalName();
            $tujuanFile = 'asset/image';
            $file->move($tujuanFile,$namafile);
            $item->image = $namafile;

            $item->nama = $request->nama;
            $item->description = $request->description;
            $item->price = $request->price;
            $item->stock = $request->stock;
            $item->category = $request->category;
            $item->save();

            return redirect('admin/main')->with('status', 'Product berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hidangan = product::where('id_hidangan',$id)->first();
        return view('product/edit_product', compact('hidangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $newitem)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('image');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/image';
        $file->move($tujuanFile,$namafile);

        $newitem->nama = $request->nama;
        $newitem->description = $request->description;
        $newitem->price = $request->price;
        $newitem->stock = $request->stock;
        $newitem->category = $request->category;
        $newitem->update();
        // return redirect('admin/main')->with('status', 'Ikan berhasil di tambahkan');
        return redirect("admin/sejarah")->with('status','Budidaya dengan id'.$newitem->id.' berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect("admin/sejarah")->with('status','Product dengan id : '.$product->id." berhasil dihapus");
        
    }
}
