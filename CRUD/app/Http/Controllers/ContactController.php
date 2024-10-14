<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 1. Menampilkan semua data kontak (READ)
    public function index()
    {
        $contacts = Contact::all();  // Mengambil semua data
        return view('contacts.index', compact('contacts')); // Passing data ke view
    }

    // 2. Menampilkan form untuk menambah kontak baru (CREATE)
    public function create()
    {
        return view('contacts.form');  // Menampilkan form tambah data
    }

    // 3. Menyimpan data baru ke database (STORE)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);
    
        Contact::create($request->all());
    
        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil ditambahkan!');
    }

    // 4. Menampilkan form untuk edit data kontak (EDIT)
    public function edit(Contact $contact)
    {
        return view('contacts.form', compact('contact'));  // Menampilkan form edit
    }

    // 5. Memperbarui data kontak (UPDATE)
    public function update(Request $request, Contact $contact)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
            'phone' => 'required',
        ]);

        // Update data di database
        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil diperbarui!');
    }

    // 6. Menghapus data kontak (DELETE)
    public function destroy(Contact $contact)
    {
        $contact->delete();  // Hapus data

        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil dihapus!');
    }
}
