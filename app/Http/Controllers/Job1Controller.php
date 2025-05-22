<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Models\Skill;
use App\Models\Applicant;
use App\Models\Experience;
use App\Models\Departement;
use App\Models\File_Upload;
use App\Models\Pelamar;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Job $job)
    {
        if ($request->is('admin/*')) {
            return view('admin.job.all', [
                'pelamars' => Pelamar::all(),
            ]);
               
                
        } else {
            
            return view('users.careers.apply', [
                'jobs' => Job::with('tags')->latest()->where('job_status', 1)->get()
            ]);
            


        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->is('admin/*')){
            return view('admin.job.create',[
                'jobs' => Job::all(),
                'departements' => Departement::all()
            ]);
        }
        else{
            return view('users.job.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $attrs = $request->validate([
            'job_name' => 'required|max:255',
            'slug' => 'required|unique:jobs',
            'departement_id' => 'required',
            'job_type' => ['required',Rule::in(['FullTime', 'Shift', 'Internship'])],
            'quota' => 'required',
            'job_location' => ['required',Rule::in(['Plant 1', 'Plant 2'])],
            // 'job_deskripsi' => 'required',
            'status_education' => 'required',
            'age' => 'required',
            'ipk' => 'required',
            'job_status' => 'required',
            'tags' => 'nullable'
        ]);

        $job = Job::create(Arr::except($attrs, 'tags'));

        if($attrs['tags'] ?? false) {
            foreach (explode(',', $attrs['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/admin/job')->with('success', 'New Lowongan Has Been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('admin.job.show',[
        'job' =>  $job,
        'departement' => Departement::all(),
        'applicants' => Pelamar::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('admin.job.edit', [
            'job' => $job,
            'departements' => Departement::all(),
            'tags' => $job->tags, // Mengambil hanya tag yang terkait dengan job ini
            'allTags' => Tag::all(), // Jika butuh semua tag untuk dropdown atau input
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $rules = [
            'job_name' => 'required|max:255',
            'departement_id' => 'required',
            'job_type' => ['required',Rule::in(['FullTime', 'Shift', 'Internship'])],
            'quota' => 'required',
            'job_location' => ['required',Rule::in(['Plant 1', 'Plant 2'])],
            // 'job_deskripsi' => 'required',
            'status_education' => 'required',
            'age' => 'required',
            'ipk' => 'required',
            'job_status' => 'required',
            'tags' => 'required'
        ];
    
        if ($request->slug != $job->slug) {
            $rules['slug'] = 'required|unique:jobs';
        }
    
        $validatedData = $request->validate($rules);

        $job->update(Arr::except($validatedData, ['tags']));

        if (!empty($validatedData['tags'])) {
            $tags = array_map('trim', explode(',', $validatedData['tags']));
        
            $tagIds = [];
        
            foreach ($tags as $tagName) {
                $tag = \App\Models\Tag::firstOrCreate(['tag_name' => $tagName]);
                $tagIds[] = $tag->id;
            }
        
            // Ini yang otomatis MENGGANTIKAN semua tag lama dengan yang baru
            $job->tags()->sync($tagIds);
        } else {
            // Kalau tidak ada tag dikirim, kosongkan relasi
            $job->tags()->detach();
        }
        
        

        return redirect('/admin/job')->with('success', 'Lowongan Has Been Updated!');
        
    }

    public function filter(Request $request)
{
    // Ambil nilai job_status dari request (default null)
    $status = $request->query('job_status');

    // Query berdasarkan status jika tidak null
    $jobs = Job::when(isset($status), function ($query) use ($status) {
        return $query->where('job_status', $status);
    })->latest()->get();

    return view('admin.job.index', compact('jobs'));
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        Job::destroy($job->id); 
        return redirect('/admin/job')->with('success', 'Lowongan Has Been Deleted!');
    }

    public function checkSlug (Request $request)
    {
        $slug = SlugService::createSlug(Job::class, 'slug', $request->job_name);
        return response()->json(['slug' => $slug]);
    }


    public function showDataApplicants($id)
{
    // Cari job, kalau gak ketemu kasih 404
    $job = Job::findOrFail($id);
    // Ambil semua pelamar untuk job tersebut
    $applicants = Pelamar::with(['alamatKtp', 'alamatDomisili','education'])->where('job_id', $id)->get();

    return view('admin/job/show', compact('job', 'applicants'));
}

public function DetailApplicant($id){
    $pelamar = Pelamar::with(['alamatKtp', 'alamatDomisili', 'education', 'riwayatKesehatan', 'job_information', 'experiences'])->findOrFail($id);
    // $experiences = Experience::where('pelamar_id', $id)->get();
    $skills = Skill::where('pelamar_id', $id)->get();
    $file_uploads = File_Upload::where('pelamar_id', $id)->first();
return view('admin/job/applicantshow', compact('pelamar','skills', 'file_uploads'));
}

}
