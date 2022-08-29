<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralSettingsRequest;
use App\Settings\GeneralSettings;

class SettingsController extends Controller
{
    public function index(GeneralSettings $settings){
        return view('admin.settings', [
            'settings' => $settings,
            'site_name' => $settings->site_name,
            'site_active' => $settings->site_active,
            'color' => $settings->color,
            'local' => $settings->locale,
            'email' => $settings->email,
            'link' => $settings->link,
            'contact_info' => $settings->contact_info,
            'delivery_policy' => $settings->delivery_policy,
            'condition' => $settings->condition,
        ]);
    }


    public function update(GeneralSettings $settings, GeneralSettingsRequest $request){

        $settings->site_name = $request->input('site_name');
        $settings->site_active = $request->boolean('site_active');
        $settings->color = $request->input('color');
        $settings->locale=$request->input('locale');
        $settings->email=$request->input('email');
        $settings->link=$request->input('link');
        $settings->contact_info=$request->input('contact_info');
        $settings->delivery_policy=$request->input('delivery_policy');
        $settings->condition=$request->input('condition');

        $settings->save();

        return redirect()->route('settings.update');
    }
}
