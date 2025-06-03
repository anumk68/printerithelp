<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Models\Setting;
use App\Models\Upload;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{

    public function index(){
        $descriptionsettings = Setting::where('type', 'like', 'description_%')->get();
        $titlesettings = Setting::where('type', 'like', 'title_%')->get();
        $keywordsettings = Setting::where('type', 'like', 'keyword_%')->get();

        $contact = Setting::all();
        $sett = Setting::where('type', 'like', 'fields%')
                            ->orWhere('type', 'like', 'links%')
                            ->get();
        return view("admin.settings.index", compact('descriptionsettings', 'titlesettings', 'keywordsettings', 'sett', 'contact'));
    }

    protected function handleImage($file)
    {
        $arr = explode('.', $file->getClientOriginalName());

        $upload = new Upload();
        $upload->file_original_name = $arr[0];
        $upload->file_name = $file->store('images', 'public');
        $upload->user_id = auth()->id();
        $upload->extension = $file->getClientOriginalExtension();
        $upload->type = 'image';
        $upload->file_size = $file->getSize();
        $upload->save();

        return $upload->id;
    }

    protected function isImageField($fieldName, $request)
    {
        $imageFields = ['header_logo', 'footer_logo', 'user_image', 'profile_image', 'testimonial_image'];
        return in_array($fieldName, $imageFields) && $request->hasFile($fieldName);
    }


    //
    public function update(Request $request){

        foreach ($request->types as $key => $type) {
            

            if($type == 'site_name'){
 
                 $this->overWriteEnvFile('APP_NAME', $request[$type]);
             }
 
             if($type == 'timezone'){
 
                 $this->overWriteEnvFile('APP_TIMEZONE', $request[$type]);
             }
 
             else{

                 if ($this->isImageField($type, $request)) {
                     $file = $request->file($type);

                     $uploadId = handleImage($file);
                     $request[$type] = $uploadId;
                } 
                
                
                $settings = Setting::where('type', $type)->first();
               

                if($request->hasFile($type) == true && $request->hasFile($type) !== ''){

                    if($settings != null){
                    
                        if(gettype($request[$type]) == 'array'){
    
                            $settings->value = json_encode($uploadId);
                        }
                        else{
                            $settings->value = $uploadId;
                        }
    
                        $settings->save();

                    }else{
 
                        $settings = new Setting;
                        $settings->type = $type;
    
                        if(gettype($request[$type]) == 'array'){
    
                            $settings->value = json_encode($request[$uploadId]);
                        }
                        else{
    
                            $settings->value = $uploadId;
                        }
                        $settings->save();
    
                    }

                }else{
                    
                
                 if($settings != null){
                    
                     if(gettype($request[$type]) == 'array'){
 
                         $settings->value = json_encode($request[$type]);
                     }
                     else{
                         $settings->value = $request[$type];
                     }
 
                     $settings->save();
                 }
                 else{
 
                     $settings = new Setting;
                     $settings->type = $type;
 
                     if(gettype($request[$type]) == 'array'){
 
                         $settings->value = json_encode($request[$type]);
                     }
                     else{
 
                         $settings->value = $request[$type];
                     }
                     $settings->save();
 
                 }
                }
             }
 
         }
        
        return back()->with('success','Settings updated successfully');

    }



    
    // Setting Insert

    public function aboutt(Request $request)
    {
        $request->validate([
            'metaselect' => 'string|in:description_,title_,keyword_',
            'type' => 'string',
            'value' => 'string',
        ]);
      
        $prefix = $request->input('metaselect');

        $name = str_replace(' ', '_', $request->type);

        $prefixedName = $prefix . $name;
        $file_value = $request->value;

        $settings = new Setting;
        $settings->type = $prefixedName;
        $settings->value = $file_value;
        $settings->save();
       
        return redirect()->back()->with('success', 'Setting added successfully.');
    }



    public function editSettingForm($id)
{
    $setting = Setting:: find($id);

    return view('admin.settings.edit', compact('setting'));
}


public function updateSettingForm(Request $request, $id){

    $request->validate([

        'value' => 'string',
    ]);
    $setting_value = $request->value;

    $settings = Setting::findOrFail($id);


    $settings->value = $setting_value;
    $settings->save();
    return redirect()->route('setting.index')->with('success', 'Setting updated successfully');

}

public function deleteSettingForm($id){
        $setting = Setting::findOrFail($id);
        $setting->delete();
        return redirect()->back()->with('success', 'Setting has been deleted');
}

public function set_footer(Request $request){
    $fields = $request->input('fields');
    $links = $request->input('links');

    
    foreach ($fields as $key => $value) {
        
        Setting::updateOrCreate(
            ['type' => "fields[$key]"],
            ['value' => $value]
        );
    }

    foreach ($links as $key => $value) {
        
        Setting::updateOrCreate(
            ['type' => "links[$key]"],
            ['value' => $value]
        );
    }
    

    return redirect()->route('setting.index')->with('success', 'Footer updated successfully');

}

public function case_study()
{
    return view('frontend.case_studies');
}
    public function updateSetting(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'type' => 'required|string',
            'value' => 'required|string',
        ]);
    
        $setting = Setting::find($request->input('id'));
    
        if (!$setting) {
            return redirect()->route('settings.index')->with('error', 'Setting not found');
        }
    
        $setting->value = $request->input('value');
        $setting->save();
    
        return redirect()->route('metaPage')->with('success', 'Setting updated successfully');
    }
    
    public function new_meta_add(Request $request)
    {
    
        $request->validate([
            'metaselect' => 'string|in:description_,title_,keyword_',
            'type' => 'string',
            'value' => 'string',
        ]);
       
        $prefix = $request->input('metaselect');
    
        $name = str_replace(' ', '_', $request->type);
    
        $prefixedName = $prefix . $name;
    
        $file_value = $request->value;
    
        $settings = new Setting;
        $settings->type = $prefixedName;
        $settings->value = $file_value;
        $settings->save();
       
        return redirect()->back()->with('success', 'Setting added successfully.');
    }

    public function metapage() {
        $descriptionsettings = Setting::where('type', 'like', 'description_%')->get();
        $titlesettings = Setting::where('type', 'like', 'title_%')->get();
        $keywordsettings = Setting::where('type', 'like', 'keyword_%')->get();
    
        $sett = Setting::where('type', 'like', 'fields%')
                        ->orWhere('type', 'like', 'links%')
                        ->get();
    
        $settings = Setting::all(); 
    
        return view("admin.settings.index", compact('descriptionsettings', 'titlesettings', 'keywordsettings', 'sett', 'settings'));
    }


}
