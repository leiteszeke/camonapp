<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperiencesController extends BaseController
{
    public function index() {
        $experiences = Experience::get();

        return view('experiences.index', compact('experiences'));
    }

    public function show(Experience $experience) {
        return view('experiences.viewer', compact('experience'));
    }

    public function create() {
        return view('experiences.create');
    }

    public function store(Request $request) {
        $skybox = $request->input('skybox', null);
        $floor = $request->input('floor', null);
        $objects = $request->input('objects', null);

        if (!is_null($objects)) {
            $tmpProps = $objects["props"];
            $props = [];

            foreach ($tmpProps as $prop => $value) {
                if (!is_null($value)) {
                    $props[$prop] = $value;
                }
            }

            $objects["props"] = $props;
        }

        $experience = new Experience();
        $experience->title = $request->input('title');
        $experience->description = $request->input('description', null);
        $experience->skybox = $skybox;
        $experience->floor = $floor;
        $experience->objects = $objects;

        if ($experience->save()) {
            return response()->json([
                'error' => false,
                'message' => 'created_success',
                'data' => $experience,
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'creation_failed',
            'data' => $experience->errors(),
        ]);
    }

    public function edit(Request $request, Experience $experience) {
        return view('experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience) {
        $experience->title = $request->input('title') ?: $experience->title;
        $experience->description = $request->input('description') ?: $experience->description;
        $experience->skybox = $request->input('skybox') ?: $experience->skybox;
        $experience->floor = $request->input('floor') ?: $experience->floor;
        $experience->objects = $request->input('objects') ?: $experience->objects;;

        if ($experience->save()) {
            return response()->json([
                'error' => false,
                'message' => 'updated_success',
                'data' => $experience,
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'update_failed',
            'data' => $experience->errors(),
        ]);
    }
}
