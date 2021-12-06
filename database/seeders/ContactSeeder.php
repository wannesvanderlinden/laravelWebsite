<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
     
         $contact =new Contact;
         $contact->id = 1;
        $contact->name = 'Wannes';
        $contact->email = 'wannestest@gmail.com';
        $contact->message = 'Is this site trustable and can I get admin privelege';
        $contact->isReply=false;
        
        $contact->save();
    }
}