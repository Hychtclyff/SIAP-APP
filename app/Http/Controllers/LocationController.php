<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData =  $request->validate([
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|email|unique:locations,email',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:10240', // Maksimal 10MB
            'home_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:10240', // Maksimal 10MB
            'link_house' => 'required|string|max:255',

        ]);


        // Simpan gambar photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_photo.' . $photo->extension();
            $photo->move(public_path('img/pp'), $photoName);
            $validatedData['photo'] = 'img/pp/' . $photoName; // Simpan path di database
        }

        // Simpan gambar home_photo
        if ($request->hasFile('home_photo')) {
            $homeImage = $request->file('home_photo');
            $homeImageName = time() . '_home_photo.' . $homeImage->extension();
            $homeImage->move(public_path('img/houses'), $homeImageName);
            $validatedData['home_photo'] = 'img/houses/' . $homeImageName; // Simpan path di database
        }

        // Simpan data alamat ke database
        $address = Location::create($validatedData); // Gunakan data yang telah divalidasi

        return redirect()->route('addresses')->with('success', 'Alamat berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Location $addresses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $addresses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|email|',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:10240', // Maksimal 10MB
            'home_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:10240', // Maksimal 10MB
            'link_house' => 'required|string|max:255',

        ]);

        // Temukan data alamat berdasarkan ID
        $address = Location::findOrFail($id);

        // Simpan gambar photo jika ada file baru yang diunggah
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($address->photo && file_exists(public_path($address->photo))) {
                unlink(public_path($address->photo));
            }

            $photo = $request->file('photo');
            $photoName = time() . '_photo.' . $photo->extension();
            $photo->move(public_path('img/pp'), $photoName);
            $validatedData['photo'] = 'img/pp/' . $photoName;
        }

        // Simpan gambar home_photo jika ada file baru yang diunggah
        if ($request->hasFile('home_photo')) {
            // Hapus foto rumah lama jika ada
            if ($address->home_photo && file_exists(public_path($address->home_photo))) {
                unlink(public_path($address->home_photo));
            }

            $homeImage = $request->file('home_photo');
            $homeImageName = time() . '_home_photo.' . $homeImage->extension();
            $homeImage->move(public_path('img/houses'), $homeImageName);
            $validatedData['home_photo'] = 'img/houses/' . $homeImageName;
        }

        // Update data alamat di database
        $address->update($validatedData);

        return redirect()->route('detail', $id)->with('success', 'Alamat berhasil modifikasi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan data alamat berdasarkan ID
        $address = Location::findOrFail($id);

        // Hapus file photo jika ada
        if ($address->photo && file_exists(public_path($address->photo))) {
            unlink(public_path($address->photo));
        }

        // Hapus file home_photo jika ada
        if ($address->home_photo && file_exists(public_path($address->home_photo))) {
            unlink(public_path($address->home_photo));
        }

        // Hapus data alamat dari database
        $address->delete();

        return redirect()->route('addresses')->with('success', 'Alamat berhasil di hapus.');
    }

    public function search(Request $request)
    {
        // Ambil input pencarian
        $query = $request->input('search');

        // Lakukan pencarian data di model (misalnya model 'addresses' sebagai contoh)
        // Sesuaikan model sesuai dengan kebutuhan data yang ingin dicari
        $results = Location::where('name', 'LIKE', "%{$query}%")
            ->orWhere('nickname', 'LIKE', "%{$query}%")
            ->get();

        // Cek apakah ada hasil pencarian
        if ($results->count() > 0) {
            return view('addresses', ['data' => $results]);
        }

        // Kembalikan jika tidak ada hasil dengan pesan error
        return back()->with('error', 'No results found. Please try a different keyword.');
    }
}
