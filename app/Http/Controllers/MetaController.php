<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateMetaRequest;
use App\Models\Meta;
use Illuminate\Support\Facades\Storage;
use App\Support\InteractsWithBanner;
use Illuminate\Support\Facades\App;

class MetaController extends Controller
{
    use InteractsWithBanner;

    protected $pathNormalizer;

    // dependency injection is needeed because cannot call static methods (defined in WhitespacePathNormalizer), 
    public function __construct(\League\Flysystem\WhitespacePathNormalizer $pathNormalizer)
    {
        $this->pathNormalizer = $pathNormalizer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Meta::class);

        $metum = Meta::all();

        return view('admin.meta.index')->with([
            'metum' => $metum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit(Meta $meta)
    {
        $this->authorize('view', Meta::class);

        return view('admin.meta.edit')->with([
            'meta' => $meta
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMetaRequest  $request
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetaRequest $request, Meta $meta)
    {
        $this->authorize('update', Meta::class);

        $data = [
            'full_name' => $request->full_name,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'greeting_headline' => $request->greeting_headline,
            'greating_description' => $request->greating_description,
            'email_address' => $request->email_address,
            'github_link' => $request->github_link,
        ];

        $profileImage = $request->file('profile_photo');
        $cvFile = $request->file('cv');

        // check if new images needs to be uploaded
        $fileUploads = [
            'profile' => $profileImage !== null && $profileImage->isValid(),
            'cv' => $cvFile !== null && $cvFile->isValid(),
        ];


        if ($fileUploads['profile']) {
            $profileImageName = time() . '-' . $profileImage->getClientOriginalName();
            $profileImagePath = $profileImage->storeAs('public/uploads', $this->pathNormalizer->normalizePath($profileImageName));
            if (!$profileImagePath) {
                $this->banner('Profile image upload failed!', 'error');
                return redirect()->route('meta.index');
            }
            $data['profile_photo'] = $profileImagePath;

            if ($meta->profile_photo) {
                Storage::delete($meta->profile_photo);
            }
        }

        if ($fileUploads['cv']) {
            $cvFileName = time() . '-' . $cvFile->getClientOriginalName();
            $cvFileNamePath = $cvFile->storeAs('public/uploads', $this->pathNormalizer->normalizePath($cvFileName));
            if (!$cvFileNamePath) {
                $this->banner('Seo image upload failed!', 'error');
                return redirect()->route('meta.index');
            }
            $data['cv'] = $cvFileNamePath;
            if ($meta->cv) {
                Storage::delete($meta->cv);
            }
        }

        $meta->update($data);

        $this->banner('Successfully saved!');
        return redirect()->route('meta.index');
    }
}
