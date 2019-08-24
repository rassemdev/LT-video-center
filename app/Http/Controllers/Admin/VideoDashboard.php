<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Video;
use App\Category;

class VideoDashboard extends Controller
{
	public function index()
	{
		$allVideos = Video::with('category')->get();

		return view('admin.video.index', compact('allVideos'));
	}

	public function addVideo()
	{
		$allCategories = Category::where('status', 'active')->get();

		return view('admin.video.add', compact('allCategories'));
	}

	public function storeVideo(Request $request)
	{


		$this->validate($request, [
			'title' => 'required',
			'description' => 'required',
			'category' => 'required',
			'video_source_name' => 'required',
			'video_source' => 'required'
		]);

		if ($request->video_source_name === 'direct_upload') {
			$this->validate($request, [
				'video_source' => 'mimetypes:video/avi,video/mpeg,video/mp4'

			]);
		}

		$newVideo = new Video();
		$newVideo->title = $request->title;
		$newVideo->description = $request->description;
		$newVideo->category_id = $request->category;
		$newVideo->video_source_name = $request->video_source_name;
		$newVideo->video_source = $request->video_source;

		if ($request->video_source_name === 'direct_upload') {
			$fileName = getFileName($request->file('video_source'));
			$newVideo->video_source = $fileName;
		}

		if ($newVideo->save()) {
			if ($request->video_source_name === 'direct_upload') {
				$request->video_source->move(public_path('/videos'), $fileName);
			}

			return redirect()->route('videoDashboard')->with('success', 'Video added successfully');
		}

		return back()->with('error', 'Something went wrong!');
	}

	public function editVideo(Video $video)
	{
		$allCategories = Category::where('status', 'active')->get();

		return view('admin.video.edit', compact('allCategories', 'video'));
	}

	public function updateVideo(Request $request, Video $video)
	{
		$this->validate($request, [
			'title' => 'required',
			'description' => 'required',
			'category' => 'required',
			'video_source_name' => 'required',
			'video_source' => 'required'
		]);

		$video->title = $request->title;
		$video->description = $request->description;
		$video->category_id = $request->category;
		$video->video_source_name = $request->video_source_name;
		$video->video_source = $request->video_source;

		if ($video->save()) {
			return redirect()->route('videoDashboard')->with('success', 'Video updated successfully');
		}

		return back()->with('error', 'Something went wrong!');
	}

	public function deleteVideo(Request $request, Video $video)
	{
		if ($video->delete()) {
			return back()->with('success', 'Video Deleted');
		}

		return back()->with('error', 'Something went wrong!');
	}
}
