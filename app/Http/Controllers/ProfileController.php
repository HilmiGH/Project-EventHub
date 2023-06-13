<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Akun;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ProfileController extends Controller
{

    public function myprofile(Request $request): View
    {
        return view('MyProfile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->umumUsername = $request->input('umumUsername');
        $request->user()->umumPhone = $request->input('umumPhone');
        $request->user()->umumCity = $request->input('umumCity');
        $request->user()->umumDOB = $request->input('umumDOB');
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function showProfile($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $akunmc = DB::table('akunmc')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('DetailedInfo',['akunmc' => $akunmc]);
    }
}
