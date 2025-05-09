<?php
namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('schedules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'jurusan' => 'required',
            'tahun_akademik' => 'required',
            'semester' => 'required',
            'nama_dosen' => 'required',
            'ruang' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        Schedule::create($request->all());
        return redirect()->route('jadwal-kuliah-ziyaad.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit(Schedule $schedule)
    {
        return view('schedules.edit', compact('schedule'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'jurusan' => 'required',
            'tahun_akademik' => 'required',
            'semester' => 'required',
            'nama_dosen' => 'required',
            'ruang' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        $schedule->update($request->all());
        return redirect()->route('jadwal-kuliah-ziyaad.index')->with('success', 'Jadwal berhasil diupdate.');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('jadwal-kuliah-ziyaad.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
