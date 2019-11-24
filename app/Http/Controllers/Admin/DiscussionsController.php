<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ExhibitSavingRequest;
use App\Models\Discussion;
use App\Models\Exhibit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Spatie\MediaLibrary\Models\Media;

class DiscussionsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $discussions = Discussion::latest()->paginate(20);
        return \view('admin.discussions.index', compact('discussions'));
    }

    /**
     * @return View
     */
    public function create():View
    {
        return \view('admin.discussions.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request):RedirectResponse
    {
        $discussion = new Discussion();
        $discussion->makeTranslation(['title', 'description'])->save();

        $this->handleMedia($request, $discussion);

        return redirect()->route('admin.discussions.edit', $discussion);
    }

    /**
     * @param Discussion $discussion
     * @return View
     */
    public function edit(Discussion $discussion):View
    {
        return \view('admin.discussions.edit', compact('discussion'));
    }

    /**
     * @param Request $request
     * @param Discussion $discussion
     * @return RedirectResponse
     */
    public function update(Request $request, Discussion $discussion):RedirectResponse
    {
        $discussion->makeTranslation(['title', 'description'])->save();

        $this->handleMedia($request, $discussion);

        return redirect()->route('admin.discussions.edit', $discussion);
    }

    /**
     * @param Discussion $discussion
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Discussion $discussion): RedirectResponse
    {
        $discussion->delete();

        return back();
    }

    /**
     * @param Request $request
     * @param Discussion $discussion
     */
    private function handleMedia(Request $request, Discussion $discussion): void
    {
        if ($request->filled('uploads')) {
            foreach ($request->input('uploads') as $media) {
                Media::find($media)->update([
                    'model_type' => Discussion::class,
                    'model_id' => $discussion->id
                ]);
            }

            Media::setNewOrder($request->input('uploads'));
        }

        if ($request->filled('deletion')) {
            Media::whereIn('id', $request->input('deletion'))->delete();
        }
    }
}
