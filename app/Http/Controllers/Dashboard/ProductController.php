<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\AddProductRequest;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(3);

        return view('products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::all();
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProductRequest $request)
    {
        $name=['en' => $request->validated('name_en'),'ar' => $request->validated('name_ar')];
        $product=new Product();
        $product
        ->setTranslation('name','en',$request->validated('name_en'))
        ->setTranslation('name','ar',$request->validated('name_ar'))

        ->setTranslation('description', 'en', 'Description in English')
        ->setTranslation('description', 'ar', 'Description in Arabic');
        $product->price = $request->price;
        $product->currency_id = 1;
        $product->category_id = 1;
        //$product->area_id = 1;
        $product->owner_id = auth()->user()->id;

        $product->save();

        $product->addAllMediaFromRequest()->each(function ($file){
            $file->toMediaCollection();
        });

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $name=$product->getTranslations('name' );
        // $categories=Category::all();

        return view('products.edit', compact('product','name','description'));
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
        $product = Product::find($id);
        $validated = $request->validate([
            'name'         => 'required|min:3',
            'price'         => 'required|numeric|min:100000',
            'description'   => 'required',
        ]);

        $product->update($validated);

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        dd($product);
        $product->delete();

        return redirect()->route('products.index');
    }
}
