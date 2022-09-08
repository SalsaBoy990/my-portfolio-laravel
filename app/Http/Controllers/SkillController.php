<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Models\Skill;
use App\Support\InteractsWithBanner;

class SkillController extends Controller
{
    use InteractsWithBanner;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Skill::class);

        $skills = Skill::orderBy('language', 'ASC')->get();


        return view('admin.skill.index')->with([
            'skills' => $skills,
            'colors' => Skill::COLORS,
            'available_locales' => config('app.available_locales'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill.create')->with([
            'colors' => Skill::COLORS,
            'available_locales' => config('app.available_locales'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkillRequest $request)
    {
        Skill::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'language' => $request->language,
            'bg_color' => $request->bg_color,
        ]);

        $this->banner('Successfully created the skill!');
        return redirect()->route('skill.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        $this->authorize('edit', Skill::class);

        return view('admin.skill.edit')->with([
            'skill' => $skill,
            'colors' => Skill::COLORS,
            'available_locales' => config('app.available_locales'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkillRequest  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $skill->update([
            'title' => $request->title,
            'content' => $request->content,
            'language' => $request->language,
            'bg_color' => $request->bg_color,
        ]);

        $this->banner('Skill successfully updated!');
        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $this->authorize('delete', Skill::class);

        $oldTitle = htmlentities($skill->title);
        $skill->deleteOrFail();

        $this->banner('Successfully deleted the skill "' . $oldTitle . '"!');
        return redirect()->route('skill.index');
    }
}
