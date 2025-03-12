<?php

namespace App\Http\Controllers;

use App\Models\ApresiasiMahasiswa;
use App\Models\Article;
use App\Models\Category;
use App\Models\Departement;
use App\Models\Documentasi;
use app\Models\Divisi;
use App\Models\Terkait;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $terkaits=Terkait::all();
        $documentasis=Documentasi::all();
        $apresiasis = ApresiasiMahasiswa::all();
        return view('front.index', compact('documentasis', 'apresiasis', 'terkaits'));
    }

    public function profile()
    {
        return view('front.profile');
    }

    public function struktur()
    {
        $departement = Departement::all();
        return view('front.struktur', compact('departement'));
    }

    public function detailDepartement(Departement $departement)
    {
        $divisi = $departement->divisis;
        $anggota = $divisi->flatMap->anggotas;

        return view('front.detailDepartement', compact('departement', 'divisi', 'anggota'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function category(Category $category)
    {
        $articles = $category->articles;
        return view('front.categoryArticle', compact('category', 'articles'));
    }

    public function article()
    {    
        $category = Category::all();
        $categoryBeasiswa = Category::where('title', 'Beasiswa')->first();
        $articles = Article::orderBy('created_at', 'desc')->paginate(12);
        
        // Ambil artikel dengan kategori "Beasiswa"
        $beasiswaArticles = $categoryBeasiswa 
            ? Article::where('category_id', $categoryBeasiswa->id)
                    ->orderBy('created_at', 'desc')
                    ->take(5) // Ambil 5 artikel terbaru
                    ->paginate(3)
            : collect(); // Jika kategori tidak ditemukan, kembalikan koleksi kosong
        
        return view('front.article', compact('category', 'articles', 'beasiswaArticles', 'categoryBeasiswa'));
    }

    public function detailArticle(Article $articles) 
    {   
        if (!$articles) {
            abort(404, 'Artikel tidak ditemukan');
        }

        $user = $articles->author ?? User::first();
        $latestArticles = Article::latest()->limit(100)->get();

        return view('front.detailArticle', compact('articles', 'user', 'latestArticles'));
    }

}
