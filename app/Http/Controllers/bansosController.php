<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\bansosModel;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class bansosController extends Controller
{
    private function convertToScore($value)
    {
        switch ($value) {
            case 0:
                return 5;
            case 1:
                return 4.5;
            case -1:
                return 4;
            case 2:
                return 3.5;
            case -2:
                return 3;
            case 3:
                return 2.5;
            case -3:
                return 2;
            case 4:
                return 1.5;
            case -4:
                return 1;
            default:
                return $value; // Jika nilai tidak sesuai aturan, kembalikan nilainya tanpa konversi
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bansos = bansosModel::all();
        $target = [
            'c1' => 4,
            'c2' => 4,
            'c3' => 5,
            'c4' => 4,
            'c5' => 5,
            'c6' => 4,
            'c7' => 4,
            'c8' => 3,
        ];

        $pemetaanGAP = $bansos->map(function ($item) use ($target) {
            $gaps = [
                'nama_penerima' => $item->nama_penerima,
                'c1' => $item->c1 - $target['c1'],
                'c2' => $item->c2 - $target['c2'],
                'c3' => $item->c3 - $target['c3'],
                'c4' => $item->c4 - $target['c4'],
                'c5' => $item->c5 - $target['c5'],
                'c6' => $item->c6 - $target['c6'],
                'c7' => $item->c7 - $target['c7'],
                'c8' => $item->c8 - $target['c8'],
            ];
            return $gaps;
        });

        $bobotNilaiGAP = $pemetaanGAP->map(function ($result) {
            return [
                'nama_penerima' => $result['nama_penerima'],
                'c1' => $this->convertToScore($result['c1']),
                'c2' => $this->convertToScore($result['c2']),
                'c3' => $this->convertToScore($result['c3']),
                'c4' => $this->convertToScore($result['c4']),
                'c5' => $this->convertToScore($result['c5']),
                'c6' => $this->convertToScore($result['c6']),
                'c7' => $this->convertToScore($result['c7']),
                'c8' => $this->convertToScore($result['c8']),
            ];
        });

        $cfAndSf = $bobotNilaiGAP->map(function ($result) {
            return [
                'nama_penerima' => $result['nama_penerima'],
                'core_factors' => [
                    'c1' => $result['c1'],
                    'c2' => $result['c2'],
                    'c4' => $result['c4'],
                    'c5' => $result['c5'],
                    'c6' => $result['c6'],
                ],
                'secondary_factors' => [
                    'c3' => $result['c3'],
                    'c7' => $result['c7'],
                    'c8' => $result['c8'],
                ]
            ];
        });

        $ncfAndNsf = $cfAndSf->map(function ($item) {
            $ncf = array_sum($item['core_factors']) / count($item['core_factors']);
            $nsf = array_sum($item['secondary_factors']) / count($item['secondary_factors']);

            return [
                'nama_penerima' => $item['nama_penerima'],
                'ncf' => $ncf,
                'nsf' => $nsf
            ];
        });

        $nilaiTotal = $ncfAndNsf->map(function ($result) {
            return [
                'nama_penerima' => $result['nama_penerima'],
                'nilai_total' => number_format((0.7 * $result['ncf']) + (0.3 * $result['nsf']), 2)
            ];
        });

        $perankingan = $nilaiTotal->sortByDesc('nilai_total')->values()->map(function ($result, $index) {
            return [
                'nama_penerima' => $result['nama_penerima'],
                'nilai_total' => $result['nilai_total'],
                'ranking' => $index + 1
            ];
        });

        $breadcrumb = (object)[
            'title' => 'Daftar Penerima Bansos',
            'list' => ['Home', 'Daftar Penerima Bansos']
        ];

        $page = (object)[
            'title' => 'Daftar Penerima Bansos'
        ];

        $activeMenu = 'bansos';

        return view('bansos.index', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu,
            'pemetaanGAP' => $pemetaanGAP,
            'bobotNilaiGAP' => $bobotNilaiGAP,
            'cfAndSf' => $cfAndSf,
            'ncfAndNsf' => $ncfAndNsf,
            'nilaiTotal' => $nilaiTotal,
            'perankingan' => $perankingan,
            'bansos' => $bansos
        ]);
    }

    private function mapValueToLabel($column, $value)
    {
        $mapping = [
            'c1' => [
                '4' => 'Tidak Menerima',
                '2' => 'Menerima'
            ],
            'c2' => [
                '4' => 'Tidak Memiliki Aset',
                '2' => 'Memiliki Aset Produktif'
            ],
            'c3' => [
                '5' => 'Warga Asli',
                '4' => 'Pindahan',
                '3' => 'Penduduk Tidak Menetap'
            ],
            'c4' => [
                '5' => '> 6',
                '3' => '3 - 6',
                '1' => '<= 3'
            ],
            'c5' => [
                '4' => '< 800.000',
                '3' => '800.000 - 1.500.000',
                '2' => '1.500.000 - 2.000.000',
                '1' => '> 2.000.000'
            ],
            'c6' => [
                '4' => 'Tidak Tetap',
                '2' => 'Tetap'
            ],
            'c7' => [
                '3' => 'Ada > 2',
                '2' => 'Ada',
                '1' => 'Tidak Ada'
            ],
            'c8' => [
                '4' => '> 3',
                '2' => '<= 3'
            ],
        ];

        return $mapping[$column][$value] ?? $value;
    }

    /**
     * Fetch the data for listing with DataTables.
     */
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $bansos = BansosModel::all();
            return DataTables::of($bansos)
                ->addIndexColumn()
                ->editColumn('c1', function ($bansos) {
                    return $this->mapValueToLabel('c1', $bansos->c1);
                })
                ->editColumn('c2', function ($bansos) {
                    return $this->mapValueToLabel('c2', $bansos->c2);
                })
                ->editColumn('c3', function ($bansos) {
                    return $this->mapValueToLabel('c3', $bansos->c3);
                })
                ->editColumn('c4', function ($bansos) {
                    return $this->mapValueToLabel('c4', $bansos->c4);
                })
                ->editColumn('c5', function ($bansos) {
                    return $this->mapValueToLabel('c5', $bansos->c5);
                })
                ->editColumn('c6', function ($bansos) {
                    return $this->mapValueToLabel('c6', $bansos->c6);
                })
                ->editColumn('c7', function ($bansos) {
                    return $this->mapValueToLabel('c7', $bansos->c7);
                })
                ->editColumn('c8', function ($bansos) {
                    return $this->mapValueToLabel('c8', $bansos->c8);
                })
                ->addColumn('aksi', function ($bansos) {
                    $btn = '<a href="' . route('bansos.edit', $bansos->id_bansos) . '" class="btn btn-warning btn-sm mb-1" style="margin-right: 5px; width: 80px;"><i class="fas fa-edit"></i> Edit</a>';
                    $btn .= '<form class="d-inline-block mb-2" method="POST" action="' . route('bansos.destroy', $bansos->id_bansos) . '">' . csrf_field() . method_field('DELETE')
                        . '<button type="submit" class="btn btn-danger btn-sm" style="width: 80px;" onclick="return confirm(\'Apakah Anda Yakin Menghapus Data Ini?\');"><i class="fas fa-trash-alt"></i> Hapus</button></form>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumb = (object)[
            'title' => 'Tambah Penerima Bansos',
            'list' => ['Home', 'Tambah Penerima Bansos']
        ];

        $page = (object)[
            'title' => 'Tambah Penerima Bansos'
        ];

        $activeMenu = 'bansos';
        return view('bansos.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_penerima' => 'required|string|max:200',
            'c1' => 'required|in:4,2',
            'c2' => 'required|in:4,2',
            'c3' => 'required|in:5,4,3',
            'c4' => 'required|in:5,3,1',
            'c5' => 'required|in:4,3,2,1',
            'c6' => 'required|in:4,2',
            'c7' => 'required|in:3,2,1',
            'c8' => 'required|in:4,2',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        BansosModel::create($request->all());

        return redirect()->route('bansos.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bansos = BansosModel::findOrFail($id);
        $breadcrumb = (object)[
            'title' => 'Edit Penerima Bansos',
            'list' => ['Home', 'Edit Penerima Bansos']
        ];

        $page = (object)[
            'title' => 'Edit Penerima Bansos'
        ];

        $activeMenu = 'bansos';
        return view('bansos.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'bansos' => $bansos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_penerima' => 'required|string|max:200',
            'c1' => 'required|in:4,2',
            'c2' => 'required|in:4,2',
            'c3' => 'required|in:5,4,3',
            'c4' => 'required|in:5,3,1',
            'c5' => 'required|in:4,3,2,1',
            'c6' => 'required|in:4,2',
            'c7' => 'required|in:3,2,1',
            'c8' => 'required|in:4,2',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        try {
            $bansos = BansosModel::findOrFail($id);
            $bansos->update($request->all());
            DB::commit();
            return redirect()->route('bansos.index')->with('success', 'Data berhasil diperbarui');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Gagal memperbarui data. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        BansosModel::findOrFail($id)->delete();
        return redirect()->route('bansos.index')->with('success', 'Data berhasil dihapus');
    }
}
