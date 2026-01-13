<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profil()
    {
        return view('profil');
    }

    public function visiMisi()
    {
        return view('visi-misi');
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function strukturOrganisasi()
    {
        // Get teachers grouped by position
        $kepalaMadrasah = Teacher::where('position', 'Kepala Madrasah')->where('is_active', true)->first();
        $wakilKepala = Teacher::where('position', 'Wakil Kepala')->where('is_active', true)->orderBy('order')->get();
        $guru = Teacher::where('position', 'Guru')->where('is_active', true)->orderBy('order')->get();
        $staff = Teacher::where('position', 'Staff')->where('is_active', true)->orderBy('order')->get();
        
        return view('struktur-organisasi', compact('kepalaMadrasah', 'wakilKepala', 'guru', 'staff'));
    }

    public function programAkademik()
    {
        return view('program-akademik');
    }

    public function ekstrakurikuler()
    {
        return view('ekstrakurikuler');
    }

    public function kelasTahfidz()
    {
        return view('kelas-tahfidz');
    }

    public function extraBeragam()
    {
        return view('extra-beragam');
    }

    public function madrasahDiniyah()
    {
        return view('madrasah-diniyah');
    }

    public function fasilitas()
    {
        return view('fasilitas');
    }

    public function berita()
    {
        $news = News::published()->orderBy('published_at', 'desc')->orderBy('created_at', 'desc')->paginate(6);
        $recentNews = News::published()->recent(4)->get();
        $categories = Category::active()->ordered()->get();
        $tags = Tag::active()->ordered()->get();
        
        return view('berita', compact('news', 'recentNews', 'categories', 'tags'));
    }

    public function gallery()
    {
        $galleries = Gallery::active()->ordered()->get();
        $categories = Gallery::active()->distinct()->pluck('category')->filter();
        
        return view('gallery', compact('galleries', 'categories'));
    }

    public function kontak()
    {
        return view('kontak');
    }
}

