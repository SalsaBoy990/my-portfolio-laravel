<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Support\InteractsWithBanner;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    use InteractsWithBanner;

    protected $pathNormalizer;

    // dependency injection is needed because cannot call static methods (defined in WhitespacePathNormalizer), 
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
        $this->authorize('viewAny', Project::class);

        $projects = Project::orderBy('language', 'ASC')->get();

        return view('admin.project.index')->with([
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('view', Project::class);

        return view('admin.project.create')->with([
            'available_locales' => config('app.available_locales'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'client' => $request->client,
            'content' => $request->content,
            'language' => $request->language,
            'links' => $request->links,
        ];

        $coverImage = $request->file('cover_image');

        // check if new image needs to be uploaded
        if ($coverImage !== null && $coverImage->isValid()) {
            $coverImageName = time() . '-' . $coverImage->getClientOriginalName();
            $coverImagePath = $coverImage->storeAs('public/uploads', $this->pathNormalizer->normalizePath($coverImageName));
            if (!$coverImagePath) {
                $this->banner('Cover image upload failed!', 'error');
                return redirect()->route('project.index');
            }
            $data['cover_image'] = $coverImagePath;
        } else {
            $this->banner('Cover image upload failed!', 'error');
            return redirect()->route('project.index');
        }

        Project::create($data);

        $this->banner(__('Project successfully created!'));
        return redirect()->route('project.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $this->authorize('view', Project::class);

        return view('admin.project.edit')->with([
            'project' => $project,
            'available_locales' => config('app.available_locales'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = [
            'title' => $request->title,
            'client' => $request->client,
            'content' => $request->content,
            'language' => $request->language,
            'links' => $request->links,
        ];

        $coverImage = $request->file('cover_image');

        // check if new image needs to be uploaded
        if ($coverImage !== null && $coverImage->isValid()) {
            $coverImageName = time() . '-' . $coverImage->getClientOriginalName();
            $coverImagePath = $coverImage->storeAs('public/uploads', $this->pathNormalizer->normalizePath($coverImageName));
            if (!$coverImagePath) {
                $this->banner('Cover image upload failed!', 'error');
                return redirect()->route('project.index');
            }
            $data['cover_image'] = $coverImagePath;

            if ($project->cover_image) {
                Storage::delete($project->cover_image);
            }
        }

        $project->update($data);

        $this->banner('Project successfully updated!');
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete', Project::class);

        $oldTitle = htmlentities($project->title);
        $project->deleteOrFail();

        $this->banner('Successfully deleted the project "' . $oldTitle . '"!');
        return redirect()->route('project.index');
    }
}
