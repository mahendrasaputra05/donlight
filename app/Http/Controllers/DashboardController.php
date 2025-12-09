<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;

class DashboardController extends Controller
{
    // Halaman utama dashboard
    public function index()
    {
        $totalProducts = Product::count();
        $totalCustomers = Customer::count();
        $totalOrders = Order::count();
        $totalRevenue = Order::sum('total_price');

        // 5 transaksi terbaru
        $recentOrders = Order::with('customer', 'product')->orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard.index', compact(
            'totalProducts', 
            'totalCustomers', 
            'totalOrders', 
            'totalRevenue', 
            'recentOrders'
        ));
    }

    // Detail produk
    public function productDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.product-detail', compact('product'));
    }

    // Daftar semua pelanggan
    public function customers()
    {
        $customers = Customer::orderBy('created_at', 'desc')->get();
        return view('dashboard.customers', compact('customers'));
    }

    // Daftar semua pesanan
    public function orders()
    {
        $orders = Order::with('customer', 'product')->orderBy('created_at', 'desc')->get();
        return view('dashboard.orders', compact('orders'));
    }

    // Statistik penjualan (contoh: total per produk)
    public function salesStats()
    {
        $salesPerProduct = Order::selectRaw('product_id, SUM(quantity) as total_qty, SUM(total_price) as total_revenue')
                                ->groupBy('product_id')
                                ->with('product')
                                ->get();

        return view('dashboard.sales-stats', compact('salesPerProduct'));
    }
}
