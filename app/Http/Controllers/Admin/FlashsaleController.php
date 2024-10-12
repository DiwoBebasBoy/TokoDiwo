<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FlashSale;
use App\Models\Product;

class FlashSaleController extends Controller
{
    // Method index untuk menampilkan semua Flash Sale
    public function index()
    {
        $flashSales = FlashSale::with('product')->get(); // Ambil data Flash Sale beserta produk terkait
        return view('pages.admin.flash_sale.index', compact('flashSales'));
    }

    // Method create untuk menampilkan form tambah Flash Sale
    public function create()
    {
        $products = Product::all(); // Ambil semua produk untuk dipilih dalam Flash Sale
        return view('pages.admin.flash_sale.create', compact('products'));
    }

    // Method store untuk menyimpan data Flash Sale baru
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'discount' => 'required|numeric|min:0|max:100',
            'name' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
        ]);
    
        // Simpan data Flash Sale ke dalam tabel FlashSale
        $flashSale = FlashSale::create([
            'name' => $request->name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
    
        // Simpan produk dan diskon ke tabel pivot (flash_sale_product)
        $flashSale->product()->attach($request->product_id, ['discount_price' => $request->discount]);
    
        return redirect()->route('admin.flash_sale.index')->with('success', 'Flash Sale berhasil ditambahkan!');
    }
    public function show($id)
    {
        $flashSale = FlashSale::with('product')->findOrFail($id);
        return view('pages.admin.flash_sale.show', compact('flashSale'));
    }
}
