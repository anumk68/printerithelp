<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Code;
use App\Models\Blog;
use App\Models\Issue;
use App\Models\Setting;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class HomeController extends Controller
{

    // error page
    public function error_page(){
        return view('frontend.error_page');
    }

    public function header(){
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        return view('includes.header',compact('codes'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $blogs = Blog::where('title', 'like', "%{$query}%")
                    ->limit(5)
                    ->get(['title', 'slug']); // return only necessary fields

        return response()->json($blogs);
    }

    public function aboutpage()
    {
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        $settings = setting::all()->keyBy('type');
        $metatitle = $settings['title_about']->value ?? '';
        $metaDescription = $settings['description_about']->value ?? '';
        $metaKeywords = $settings['keyword_about']->value ?? '';
        return view('frontend.about',compact('metatitle','metaDescription', 'metaKeywords','codes'));
    }

    public function homepage()
    {
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        $settings = setting::all()->keyBy('type');
        $metatitle = $settings['title_Home']->value ?? '';
        $metaDescription = $settings['description_home']->value ?? '';
        $metaKeywords = $settings['keyword_home']->value ?? '';
        
        return view('frontend.home',compact('metatitle','metaDescription', 'metaKeywords','codes'));
    }

    public function getSolution(Request $request)
    {
        $issue = $request->issue;
        $record = Issue::where('issue', $issue)->first();

        if ($record) {
            return response()->json(['solution' => $record->solution]);
        } else {
            return response()->json(['solution' => 'No Solution Available']);
        }
    }

    public function virtual_chat(){
        $code = Code::orderByRaw("code = '+1' DESC, code ASC")->get();
        date_default_timezone_set('Asia/Kolkata');
        $bg   = "#3C90B4";
        $time = date('H:i:s A');
        $v    = "random";
        $sol  = "IamSolution";
        return view('frontend.virtual-chat',compact('bg','time','v','sol','code'));
    }

    public function iframeindex(){
        return view('frontend.run.index');
    }

    public function iframeselectwifiusb(){
        return view('frontend.run.Select-Wi-Fi-or-USB-connection');
    }

    public function iframeform(){
        return view('frontend.run.form');
    }

    public function save_feedback(Request $request){
        $validate = $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'feedback' => 'nullable'
        ]);
        $name  = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $feedback = $request->feedback;

        $contact           = new Feedback();
        $contact->name     = $name;
        $contact->email    = $email;
        $contact->phone    = $phone;
        $contact->feedback = $feedback;
        $contact->save();

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'printerithelp.com';  
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@printerithelp.com';  
            $mail->Password = 'Printer@2024#@';  
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;  
    
            $mail->setFrom('contact@printerithelp.com');
            $mail->addAddress('contact@printerithelp.com'); 
            // $mail->addAddress('manpreet.digirush@gmail.com'); 
           
            $mail->Subject = 'New Feedback Form Submission';
            $mail->Body = 'You have a new feedback from: ' . "\n\n" .
                          'Name: ' . $request->name . "\n" .
                          'Contact: ' . $request->phone . "\n" .
                          'Email: ' . $request->email . "\n" .
                          'Feedback: ' . $request->feedback . "\n";
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }

        return back()->with('success', 'Enquiry Sent Successfully!');
    }
    
    public function servicepage()
    {
        return view('frontend.service');
    }

    public function admindashboard()
    {
        $totalContacts = Contact::count();
        return view('admin.dashboard', compact('totalContacts'));
    }

    public function contactindex()
    {
        $contacts = Contact::where('form_type', 'contact_form')->orderBy('id','desc')->get();
        return view('admin.contact.index',compact('contacts'));
    }

    public function homeindex()
    {
        $contacts = Contact::where('form_type', 'home_form')->orderBy('id','desc')->get();
        return view('admin.home.index',compact('contacts'));
    }

    public function service_data()
    {
        $contacts = Contact::whereIn('form_type', [
            'hp_service', 
            'canon_service', 
            'brother_service', 
            'epson_service',
            'installation_service'
        ])
        ->orderBy('id', 'desc')->get();

        return view('admin.services_data.index',compact('contacts'));
    }

    public function settingpage()
    {
        $contacts = Contact::where('form_type', 'home_form')->get();
        return view('admin.settings.index');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }

    public function file_upload(Request $request)
    {
        if($request->hasFile('upload')){

            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName.'_'.time().'.'.$extension;
            
            $request->file('upload')->move(public_path('blog_image'), $fileName);
            $url = asset('blog_image/'.$fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);


        }

    }
    public function hpprinterpage()
    {
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        $settings = setting::all()->keyBy('type');
        $metatitle = $settings['title_HP-Printer']->value ?? '';
        $metaDescription = $settings['description_HP-Printer']->value ?? '';
        $metaKeywords = $settings['keyword_HP-Printer']->value ?? '';

        return view('frontend.hp-printer',compact('metatitle','metaDescription', 'metaKeywords','codes'));
    }
    
    public function epsonprinterpage()
    {
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        $settings = setting::all()->keyBy('type');
        $metatitle = $settings['title_Epson']->value ?? '';
        $metaDescription = $settings['description_Epson']->value ?? '';
        $metaKeywords = $settings['keyword_Epson']->value ?? '';

        return view('frontend.epson-printer',compact('metatitle','metaDescription', 'metaKeywords','codes'));
    }
    public function brotherprinterpage()
    {
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        $settings = setting::all()->keyBy('type');
        $metatitle = $settings['title_Brother']->value ?? '';
        $metaDescription = $settings['description_Brother']->value ?? '';
        $metaKeywords = $settings['keyword_Brother']->value ?? '';

        return view('frontend.brother-printer',compact('metatitle','metaDescription', 'metaKeywords','codes'));
    }
    public function canonprinterpage()
    {
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        $settings = setting::all()->keyBy('type');
        $metatitle = $settings['title_Canon']->value ?? '';
        $metaDescription = $settings['description_Canon']->value ?? '';
        $metaKeywords = $settings['keyword_Canon']->value ?? '';

        return view('frontend.expert-canon-printer-support-services',compact('metatitle','metaDescription', 'metaKeywords','codes'));
    }

    public function installationprinterpage()
    {
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        $settings = setting::all()->keyBy('type');
        $metatitle = $settings['title_Installation']->value ?? '';
        $metaDescription = $settings['description_Installation']->value ?? '';
        $metaKeywords = $settings['keyword_Installation']->value ?? '';

        return view('frontend.printer-installation-troubleshooting-service',compact('metatitle','metaDescription', 'metaKeywords','codes'));
    }
    public function privacypolicypage()
    {           
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
              return view('frontend.privacy-policy',compact('codes'));
    }
    public function refundpolicypage()
    {           
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
              return view('frontend.refund-policy',compact('codes'));
    }
    public function termspolicypage()
    {       
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
              return view('frontend.terms-policy',compact('codes'));
    }
}
