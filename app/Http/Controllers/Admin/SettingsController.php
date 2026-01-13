<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display the settings page.
     */
    public function index()
    {
        $settings = Setting::all()->keyBy('key');
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update settings.
     */
    public function update(Request $request)
    {
        $request->validate([
            'logo_main' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_navbar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hero_background' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'favicon' => 'nullable|file|mimes:png,jpg,jpeg,gif,svg|max:1024',
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string|max:500',
            'hero_cta_text' => 'nullable|string|max:255',
            'hero_cta_link' => 'nullable|url|max:255',
        ]);

        // Handle logo main upload
        if ($request->hasFile('logo_main')) {
            try {
                $logo = $request->file('logo_main');
                $logoName = 'logo_main_' . time() . '.' . $logo->getClientOriginalExtension();
                
                // Ensure settings directory exists
                if (!Storage::exists('public/settings')) {
                    Storage::makeDirectory('public/settings', 0755, true);
                }
                
                // Delete old logo if exists
                $oldLogo = Setting::get('logo_main');
                if ($oldLogo && !filter_var($oldLogo, FILTER_VALIDATE_URL)) {
                    if (Storage::exists('public/' . $oldLogo)) {
                        Storage::delete('public/' . $oldLogo);
                    }
                }
                
                $stored = $logo->storeAs('public/settings', $logoName);
                if ($stored && Storage::exists('public/settings/' . $logoName)) {
                    Setting::set('logo_main', 'settings/' . $logoName, 'image', 'Logo utama website');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Gagal menyimpan logo utama: ' . $e->getMessage());
            }
        }

        // Handle logo navbar upload
        if ($request->hasFile('logo_navbar')) {
            try {
                $logo = $request->file('logo_navbar');
                $logoName = 'logo_navbar_' . time() . '.' . $logo->getClientOriginalExtension();
                
                // Ensure settings directory exists
                if (!Storage::exists('public/settings')) {
                    Storage::makeDirectory('public/settings', 0755, true);
                }
                
                // Delete old logo if exists
                $oldLogo = Setting::get('logo_navbar');
                if ($oldLogo && !filter_var($oldLogo, FILTER_VALIDATE_URL)) {
                    if (Storage::exists('public/' . $oldLogo)) {
                        Storage::delete('public/' . $oldLogo);
                    }
                }
                
                $stored = $logo->storeAs('public/settings', $logoName);
                if ($stored && Storage::exists('public/settings/' . $logoName)) {
                    Setting::set('logo_navbar', 'settings/' . $logoName, 'image', 'Logo untuk navbar');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Gagal menyimpan logo navbar: ' . $e->getMessage());
            }
        }

        // Handle hero background upload
        if ($request->hasFile('hero_background')) {
            try {
                $bg = $request->file('hero_background');
                $bgName = 'hero_bg_' . time() . '.' . $bg->getClientOriginalExtension();
                
                // Ensure settings directory exists
                if (!Storage::exists('public/settings')) {
                    Storage::makeDirectory('public/settings', 0755, true);
                }
                
                // Delete old background if exists
                $oldBg = Setting::get('hero_background');
                if ($oldBg && !filter_var($oldBg, FILTER_VALIDATE_URL)) {
                    if (Storage::exists('public/' . $oldBg)) {
                        Storage::delete('public/' . $oldBg);
                    }
                }
                
                $stored = $bg->storeAs('public/settings', $bgName);
                if ($stored && Storage::exists('public/settings/' . $bgName)) {
                    Setting::set('hero_background', 'settings/' . $bgName, 'image', 'Background gambar untuk hero section');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Gagal menyimpan background hero: ' . $e->getMessage());
            }
        }

        // Handle favicon upload
        if ($request->hasFile('favicon')) {
            try {
                $favicon = $request->file('favicon');
                
                // Get original extension
                $extension = strtolower($favicon->getClientOriginalExtension());
                if (empty($extension) || !in_array($extension, ['ico', 'png', 'jpg', 'jpeg', 'gif', 'svg'])) {
                    $extension = 'png'; // Default to png if extension is invalid
                }
                
                $faviconName = 'favicon_' . time() . '_' . uniqid() . '.' . $extension;
                
                // Ensure settings directory exists
                $settingsPath = storage_path('app/public/settings');
                if (!file_exists($settingsPath)) {
                    if (!mkdir($settingsPath, 0755, true)) {
                        return redirect()->back()->with('error', 'Gagal membuat direktori settings. Pastikan storage dapat ditulis.');
                    }
                }
                
                // Delete old favicon if exists
                $oldFavicon = Setting::get('favicon');
                if ($oldFavicon && !filter_var($oldFavicon, FILTER_VALIDATE_URL)) {
                    $oldPath = storage_path('app/public/' . $oldFavicon);
                    if (file_exists($oldPath)) {
                        @unlink($oldPath);
                    }
                }
                
                // Move uploaded file directly using move_uploaded_file (more reliable)
                $destination = $settingsPath . DIRECTORY_SEPARATOR . $faviconName;
                
                if (move_uploaded_file($favicon->getRealPath(), $destination)) {
                    // Verify file exists and has content
                    if (file_exists($destination) && filesize($destination) > 0) {
                        Setting::set('favicon', 'settings/' . $faviconName, 'image', 'Favicon website');
                    } else {
                        return redirect()->back()->with('error', 'File berhasil diupload tapi tidak valid atau kosong.');
                    }
                } else {
                    $error = error_get_last();
                    return redirect()->back()->with('error', 'Gagal memindahkan file: ' . ($error['message'] ?? 'Unknown error'));
                }
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error('Favicon upload error: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Gagal menyimpan file favicon: ' . $e->getMessage());
            }
        }

        // Update text settings
        Setting::set('hero_title', $request->hero_title, 'text', 'Judul utama di hero section');
        Setting::set('hero_subtitle', $request->hero_subtitle, 'text', 'Subtitle di hero section');
        Setting::set('hero_cta_text', $request->hero_cta_text, 'text', 'Teks tombol CTA di hero');
        Setting::set('hero_cta_link', $request->hero_cta_link, 'text', 'Link tombol CTA di hero');

        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan berhasil diperbarui!');
    }
}
