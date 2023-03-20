<?php
  
namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use Maatwebsite\Excel\Concerns\WithHeadings;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
    
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'nama' => 'required',
            'harga' => 'required',
            'tipe' => 'required',
            'stok' => 'required',
            'kadaluarsa' => 'required',
            'komposisi' => 'required',
            'deskripsi' => 'required',
            'berat_satuan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
          
        // $fileName = time().'.'.$request->file->extension();  
   
        // $request->file->move(public_path('file'), $fileName);
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        // if ($image = $request->file('file')) {
        //     $destinationPath = 'file/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['file'] = "$profileImage";
        // }
    
        Product::create($input);
     
        return redirect('/admin')->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('show',compact('product'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
        ]);
  
        $input = $request->all();
  

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        if ($image = $request->file('file')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }
          
        $product->update($input);
    
        return redirect('/admin')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
     
        return redirect('/admin')
                        ->with('success','Product deleted successfully');
    }

    public function lpindex()
    {
        $products = Product::all();
    
        return view('user.products',compact('products'));
    }

    public function lpshow(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        return view('user.detail',compact('product'));
    }

    public function exportexcel(){
        return Excel::download(new EmployeeExport, 'data.xlsx');   
    }

    public function importexcel(Request $request){
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('file', $namafile);

        Excel::import(new EmployeeImport, \public_path('/file/'.$namafile));
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $products = Product::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('user.products', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
}