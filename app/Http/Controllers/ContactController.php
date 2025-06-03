<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Code;
use App\Models\AllContact;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\Setting;

class ContactController extends Controller
{
    public function contactpage()
    {
        $codes = Code::orderByRaw("CASE WHEN country = 'USA' THEN 0 ELSE 1 END")->orderBy('country')->get();
        $settings        = setting::all()->keyBy('type');
        $metatitle       = $settings['title_Contact-us']->value ?? '';
        $metaDescription = $settings['description_Contact-us']->value ?? '';
        $metaKeywords    = $settings['keyword_Contact-us']->value ?? '';
        return view('frontend.contact',compact('metatitle','metaDescription', 'metaKeywords','codes'));
    }

    //new function as per updated layout 1may,25

    public function submitAllContacts(Request $request){
        // dd($request);
        $validate = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'name'  => 'required',
            'email' => 'required|email',
            'code'  => 'nullable',
            'phone' => 'required',
            'issue' => 'nullable'
        ]);
        $brand = $request->brand ?? 'N/A';
        $model = $request->model ?? 'N/A';
        $name  = $request->name ?? 'N/A';
        $email = $request->email ?? 'N/A';
        $code  = $request->code ?? 'N/A';
        $phone = $request->phone ?? 'N/A';
        $issue = $request->issue ?? 'N/A';

        $contact = new AllContact();
        $contact->brand = $brand;
        $contact->model = $model;
        $contact->name  = $name;
        $contact->email = $email;
        $contact->phone = $code . $phone;
        $contact->issue = $issue;
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
           
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = 'You have a new contact form submission from: ' . "\n\n" .
                          'Name: ' . $name . "\n" .
                          'Contact: ' . $request->code.$request->phone . "\n" .
                          'Brand: ' . $brand . "\n" .
                          'Email: ' . $email . "\n" .
                          'Model Number: ' . $model . "\n" .
                          'Issue: ' . $issue . "\n";
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }

        return back()->with('success', 'Enquiry Sent Successfully!');
    }
    
    public function submitAllServices(Request $request){
        $validate = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'name'  => 'required',
            'email' => 'required|email',
            'code'  => 'required',
            'phone' => 'required',
            'issue' => 'nullable'
        ]);
        $brand = $request->brand;
        $model = $request->model;
        $name  = $request->name;
        $email = $request->email;
        $code  = $request->code;
        $phone = $request->phone;
        $issue = $request->issue;

        $contact = new AllContact();
        $contact->brand = $brand;
        $contact->model = $model;
        $contact->name  = $name;
        $contact->email = $email;
        $contact->phone = $code . $phone;
        $contact->issue = $issue;
        $contact->save();

        $page    = $request->page;
        $service = $request->service;

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
           
            $mail->Subject = $page .' - '.'Service Form Submission';
            $mail->Body = 'You have a new contact form submission from Service Page: ' . "\n\n" .
                          'Name: ' . $request->name . "\n" .
                          'Contact: ' . $request->code.$request->phone . "\n" .
                          'Brand: ' . $request->brand . "\n" .
                          'Service: ' . $request->service . "\n" .
                          'Email: ' . $request->email . "\n" .
                          'Model Number: ' . $request->model . "\n" .
                          'Issue: ' . $request->issue . "\n";
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }

        return back()->with('success', 'Enquiry Sent Successfully!');
    }




    public function submitContactForm(Request $request)
    {
        
        $form_type = $request->form_type;
        $form_explode = explode('_',$form_type);
        //dd($form_explode);

        //submission of home forms
        if ($form_type == "home_form") {

            $validatedData = $request->validate([
            'firstname' => 'required',
            'email' => 'required', 
            'contact' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'service' => 'required',
            'subservice' => 'required',
        ], [
            'email.unique' => 'Email already exists', 
        ]);
        // Save the contact form data
        Contact::create([
            'first_name' => $request->firstname,
            // 'last_name' => $request->lastName,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'city' => $request->city,
            'service' => $request->service,
            'sub_service' => $request->subservice,
            'model_number' => $request->model,
            'form_type' => $request->form_type,
        ]);
    
        
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
            // $mail->addAddress('contact@printerithelp.com'); 
            $mail->addAddress('anudeol054@gmail.com'); 
           
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = 'You have a new contact form submission from: ' . "\n\n" .
                          'Name: ' . $request->firstname . "\n" .
                          'Email: ' . $request->email . "\n" .
                          'Address: ' . $request->address . "\n" .
                          'Contact: ' . $request->contact . "\n" .
                          'City: ' . $request->city . "\n" .
                          'Service: ' . $request->service . "\n" .
                          'Sub-Service: ' . $request->subservice . "\n" .
                          'Model Number: ' . $request->model . "\n" .
                          'Form Type: ' . $request->form_type;
    
           
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }

        }
        //submission of contact form
        elseif ($form_type == "contact_form") {
            
            $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required', 
            'email' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'city' => 'required'
        ], [
            'email.unique' => 'Email already exists', 
        ]);
        // Save the contact form data
        Contact::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'city' => $request->city,
            'form_type' => $request->form_type,
        ]);
    
        
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
            // $mail->addAddress('contact@printerithelp.com'); 
            $mail->addAddress('anudeol054@gmail.com'); 
           
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = 'You have a new contact form submission from: ' . "\n\n" .
                          'Name: ' . $request->firstname ." ". $request->lastname. "\n" .
                          'Email: ' . $request->email . "\n" .
                          'Address: ' . $request->address . "\n" .
                          'Contact: ' . $request->contact . "\n" .
                          'City: ' . $request->city . "\n" .
                          'Form Type: ' . $request->form_type;
    
           
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }

        }elseif ($form_explode[1] == "service") {
            //dd($request);
            $validatedData = $request->validate([
            'firstname' => 'required',
            'email' => 'required', 
            'contact' => 'required',
            'address' => 'required',
            'city' => 'required',
            'service' => 'required',
            'subservice' => 'required',
        ], [
            'email.unique' => 'Email already exists', 
        ]);
        
        // Save the contact form data
        Contact::create([
            'first_name' => $request->firstname,
            // 'last_name' => $request->lastName,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->contact,
            'city' => $request->city,
            'service' => $request->service,
            'sub_service' => $request->subservice,
            'model_number' => $request->model,
            'form_type' => $request->form_type,
        ]);
    
        
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
            // $mail->addAddress('contact@printerithelp.com'); 
            $mail->addAddress('anudeol054@gmail.com'); 
           
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body = 'You have a new contact form submission from: ' . "\n\n" .
                          'Name: ' . $request->firstname . "\n" .
                          'Email: ' . $request->email . "\n" .
                          'Address: ' . $request->address . "\n" .
                          'Contact: ' . $request->contact . "\n" .
                          'City: ' . $request->city . "\n" .
                          'Service: ' . $request->service . "\n" .
                          'Sub-Service: ' . $request->subservice . "\n" .
                          'Model Number: ' . $request->model . "\n" .
                          'Form Type: ' . $request->form_type;
    
           
            $mail->send();
        } catch (Exception $e) {
            return back()->with('error', 'There was an error sending your email. Please try again.');
        }

        }else{
            return back()->with('error', 'There was an error in processing the form and sending your email. Please try again.');
        }
        
    
        
        return back()->with('success', 'Thank you for your enquiry!');
    }
    
}
