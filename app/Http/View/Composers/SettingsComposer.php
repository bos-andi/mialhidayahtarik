<?php

namespace App\Http\View\Composers;

use App\Models\Setting;
use Illuminate\View\View;

class SettingsComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $settings = Setting::all()->keyBy('key');
        
        $view->with([
            'logoMain' => isset($settings['logo_main']) ? $settings['logo_main']->value : null,
            'logoNavbar' => isset($settings['logo_navbar']) ? $settings['logo_navbar']->value : null,
            'favicon' => isset($settings['favicon']) ? $settings['favicon']->value : null,
            'heroTitle' => isset($settings['hero_title']) ? $settings['hero_title']->value : 'Selamat Datang di MI AL-HIDAYAH Tarik',
            'heroSubtitle' => isset($settings['hero_subtitle']) ? $settings['hero_subtitle']->value : 'Membangun Generasi Berkarakter, Berprestasi, dan Berakhlak Mulia',
            'heroCtaText' => isset($settings['hero_cta_text']) ? $settings['hero_cta_text']->value : 'Daftar Sekarang',
            'heroCtaLink' => isset($settings['hero_cta_link']) ? $settings['hero_cta_link']->value : '#contact',
            'heroBackground' => isset($settings['hero_background']) ? $settings['hero_background']->value : null,
        ]);
    }
}
