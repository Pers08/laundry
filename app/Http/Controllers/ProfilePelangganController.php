<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilePelangganController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone'   => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:500'],
        ]);

        $user = Auth::user();
        $user->update([
            'phone'   => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('status-cucian')->with('success', 'Profil berhasil diperbarui!');
    }
}