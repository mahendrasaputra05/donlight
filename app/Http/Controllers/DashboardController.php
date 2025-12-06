<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;   // Contoh model produk
use App\Models\Order;     // Contoh model transaksi/pesanan

class DashboardController extends Controller
{
    // Menampilkan halaman dashboard utama
    public function index()
    {
        // Ambil data total produk dan total order sebagai contoh
        $totalProducts = Product::count();
        $totalOrders = Order::count();

        // Ambil 5 order terbaru
        $recentOrders = Order::orderBy('created_at', 'desc')->take(5)->get();

        // Kirim data ke view
        return view('dashboard.index', compact('totalProducts', 'totalOrders', 'recentOrders'));
    }

    // Contoh menampilkan detail produk
    public function productDetail($id)
    {
        $product = Product::findOrFail($id);

        return view('dashboard.product-detail', compact('product'));
    }

    // Contoh menampilkan laporan pesanan
    public function orderReport()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();

        return view('dashboard.order-report', compact('orders'));
    }
}
