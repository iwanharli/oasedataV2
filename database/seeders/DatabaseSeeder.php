<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\NewsCategory;
use App\Models\Tag;
use App\Models\Redaction;
use App\Models\Guideline;
use App\Models\Disclaimer;
use App\Models\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Harlicuan',
            'email' => 'admin@oasedata.com',
            'password' => bcrypt('kecilkec1l'),
            'roles' => 'Administrator'
        ]);

        User::create([
            'name' => 'Jhon Doe',
            'email' => 'editor@oasedata.com',
            'password' => bcrypt('editor123'),
            'roles' => 'Editor'
        ]);

        User::create([
            'name' => 'Valeria Luna',
            'email' => 'penulis@oasedata.com',
            'password' => bcrypt('penulis123'),
            'roles' => 'Penulis'
        ]);

        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);

        Category::create([
            'name' => 'Internet',
            'slug' => 'internet'
        ]);

        Category::create([
            'name' => 'Gadget',
            'slug' => 'gadget'
        ]);

        Category::create([
            'name' => 'Sains',
            'slug' => 'sains'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'game'
        ]);

        Category::create([
            'name' => 'Tutorial',
            'slug' => 'tutorial'
        ]);

        Tag::create([
            'name' => 'Berita Terbaru',
            'slug' => 'berita-terbaru'
        ]);

        Tag::create([
            'name' => 'Berita Teknologi',
            'slug' => 'berita-teknologi'
        ]);

        Redaction::create([
            'redaction_content' => '
            <p>
                Dikelola oleh : <b> OaseData </b> <br/><br/>

                <b>Pimpinan Umum </b>: Harli <br/><br/>

                <b> Pimpinan Redaksi </b> : Harli <br/>
                <b> Sekretaris Redaksi </b> : T. Hisyam <br/>
                <b> Redaktur Pelaksana </b> : – <br/>
                <b> Redaktur </b> : T. Hisyam, <br/>
                <b> Staf Redaksi </b> : <br/><br/>

                <b> Penulis Konten </b> : <br/><br/>

                <b> Ass. Pimpinan Perusahaan </b> : T. Hisyam <br/>
                <b> Keuangan </b> : Muhafid <br/>
                <b> Iklan </b> : <br/><br/>

                <b> WebMaster </b> : OaseData.com
            <p>'
        ]);

        Guideline::create([
            'guideline_content' => '
            <p>
                PERATURAN DEWAN PERS 
            <p>'
        ]);

        Disclaimer::create([
            'disclaimer_content' => '
            <p>
                Disclaimer 
            <p>'
        ]);

        Contact::create([
            'contact_content' => '
            <p>
                Kontak 
            <p>'
        ]);
    }
}
