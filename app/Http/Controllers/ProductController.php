<?php
namespace App\Http\Controllers;

use App\Product;
use App\Cart;

use Illuminate\Http\Request;

use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products ]);
    }

    public function show(Product $product)

        {

           return view('products.show', compact ('products'));

        }

    public function create()
    {
    return view('products.create');
    }

    public function store(Request $request)
    {
     $product = $this->validate(request(), [
         'name' => 'required',
         'description' => 'required',
         'price' => 'required|numeric'
     ]);   

    Product::create($product);

     return back()->with('success', 'Product has been added');

    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product','id'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate(request(), [
          'name' => 'required',
          'description' => 'required',
          'price' => 'required|numeric'
        ]);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->save();
        return redirect('products')->with('success','Product has been updated');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products')->with('success','Product has been  deleted');
    }

    public function getAddtoCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return view('shop');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items, 'totalPrice' =>$cart->totalPrice]);
    }

}
