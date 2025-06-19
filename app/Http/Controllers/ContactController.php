<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Contact;
class ContactController extends Controller
{
   
    function createContact(Request $request){
       $request->validate([
        'phone'=>['required','digits:10'],
       ],[
         'phone.required' => 'The phone number is required.',
            'phone.digits' => 'The phone number must be exactly 10 digits.',
        
    ]);
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->save();
        
  
  return view('contactsuccess');
    
    }
     function showContacts()
{
    $contacts = Contact::all();
    return view('display',['contacts'=>$contacts]);
}
function edit($id){
  $contact=Contact::find($id);
   return view('editcontact', ['contact' => $contact]);
}
function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => ['required', 'digits:10'],
    ], [
        'phone.digits' => 'The phone number must be exactly 10 digits.',
    ]);

    $contact = Contact::findOrFail($id);
    $contact->name = $request->name;
    $contact->phone = $request->phone;
    $contact->save();

    return redirect('display')->with('success', 'Contact updated successfully!');
}
public function delete($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect('display')->with('success', 'Contact deleted successfully!');
}

}
