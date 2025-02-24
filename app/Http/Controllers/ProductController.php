<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Sample anime-related products
        $products = [
            ['name' => 'Naruto Action Figure', 'price' => 1200, 'image' => 'naruto.jpg'],
            ['name' => 'One Piece Hoodie', 'price' => 1500, 'image' => 'one_piece.jpg'],
            ['name' => 'Demon Slayer Sword', 'price' => 3500, 'image' => 'demon_slayer.jpg'],
            ['name' => 'Attack on Titan Poster', 'price' => 800, 'image' => 'aot.jpg'],
            ['name' => 'Jujutsu Kaisen Keychain', 'price' => 300, 'image' => 'jjk_keychain.jpg'],
        ];

        return view('products.index', compact('products'));
    }
}
