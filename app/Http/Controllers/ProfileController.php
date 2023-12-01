<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProfileController extends Controller
{
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

    public function uploadDocument(Request $request): RedirectResponse
    {
        $request->validateWithBag('fileUploading', [
            'file' => ['required', ''],
        ]);

        $user = $request->user();

        $user->addMediaFromRequest('file')
            ->toMediaCollection('documents');

        return Redirect::to(route('dashboard'));
    }


    public function deleteDocument(Request $request, string $uuid): RedirectResponse
    {
        $request->merge([
            'uuid' => $uuid
        ]);

        $request->validateWithBag('fileDeletion', [
            'uuid' => [
                'required',
                'string',
                'uuid',
                Rule::exists(Media::class, 'uuid')
                    ->where('model_type', User::class)
                    ->where('model_id', Auth::user()->id)
            ],
        ]);

        Auth::user()?->getMedia('documents')
            ->filter(fn(Media $media) => $media->uuid === $uuid)
            ->each(fn(Media $media) => $media->delete());

        return Redirect::to(route('dashboard'));
    }
}
