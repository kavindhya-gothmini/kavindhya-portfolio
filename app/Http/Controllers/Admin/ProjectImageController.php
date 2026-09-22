<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class ProjectImageController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'images' => ['required', 'array'],
            'images.*' => ['required', 'image', 'mimes:jpeg,jpg,png,webp', 'max:5120'],
        ]);

        foreach ($request->file('images') as $image) {
            $path = $image->store('projects', 'public');

            $project->images()->create([
                'image_path' => $path,
                'sort_order' => $project->images()->count(),
            ]);
        }

        return back()->with('success', 'Project images uploaded successfully.');
    }

    public function destroy(ProjectImage $projectImage)
    {
        if ($projectImage->image_path) {
            $filePath = storage_path('app/public/' . $projectImage->image_path);

            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $projectImage->delete();

        return back()->with('success', 'Project image deleted successfully.');
    }
}