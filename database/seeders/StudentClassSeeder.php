<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use function Symfony\Component\Clock\now;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $datas = [
        //     [
        //         'grade' => 'X',
        //         'name' => 'RPL',
        //         'vocation' => 'INFORMATIKA',
        //     ],
        //     [
        //         'grade' => 'X',
        //         'name' => 'TKJ 1',
        //         'vocation' => 'INFORMATIKA',
        //     ],
        //     [
        //         'grade' => 'X',
        //         'name' => 'TKJ 2',
        //         'vocation' => 'INFORMATIKA',
        //     ],
        //     [
        //         'grade' => 'X',
        //         'name' => 'SIJA',
        //         'vocation' => 'INFORMATIKA',
        //     ],
        //     [
        //         'grade' => 'XI',
        //         'name' => 'RPL',
        //         'vocation' => 'INFORMATIKA',
        //     ],
        //     [
        //         'grade' => 'XI',
        //         'name' => 'TKJ',
        //         'vocation' => 'INFORMATIKA',
        //     ],
        //     [
        //         'grade' => 'XI',
        //         'name' => 'SIJA',
        //         'vocation' => 'INFORMATIKA',
        //     ],
        //     [
        //         'grade' => 'XIII',
        //         'name' => 'SIJA',
        //         'vocation' => 'INFORMATIKA',
        //     ],
        // ];

        $classes = [
            [
                'grade' => 'X',
                'name' => 'DPIB 1',
                'vocation' => 'BANGUNAN',
                'uuid' => 'X DPIB 1',
            ],
            [
                'grade' => 'X',
                'name' => 'DPIB 2',
                'vocation' => 'BANGUNAN',
                'uuid' => 'X DPIB 2',
            ],
            [
                'grade' => 'X',
                'name' => 'TKP 1',
                'vocation' => 'BANGUNAN',
                'uuid' => 'X TKP 1',
            ],
            [
                'grade' => 'X',
                'name' => 'TKP 2',
                'vocation' => 'BANGUNAN',
                'uuid' => 'X TKP 2',
            ],
            [
                'grade' => 'XI',
                'name' => 'DPIB 1',
                'vocation' => 'BANGUNAN',
                'uuid' => 'XI DPIB 1',
            ],
            [
                'grade' => 'XI',
                'name' => 'DPIB 2',
                'vocation' => 'BANGUNAN',
                'uuid' => 'XI DPIB 2',
            ],
            [
                'grade' => 'XI',
                'name' => 'TKP 1',
                'vocation' => 'BANGUNAN',
                'uuid' => 'XI TKP 1',
            ],
            [
                'grade' => 'XI',
                'name' => 'TKP 2',
                'vocation' => 'BANGUNAN',
                'uuid' => 'XI TKP 2',
            ],
            [
                'grade' => 'X',
                'name' => 'TITL 1',
                'vocation' => 'LISTRIK',
                'uuid' => 'X TITL 1',
            ],
            [
                'grade' => 'X',
                'name' => 'TITL 2',
                'vocation' => 'LISTRIK',
                'uuid' => 'X TITL 2',
            ],
            [
                'grade' => 'X',
                'name' => 'TITL 3',
                'vocation' => 'LISTRIK',
                'uuid' => 'X TITL 3',
            ],
            [
                'grade' => 'XI',
                'name' => 'TITL 1',
                'vocation' => 'LISTRIK',
                'uuid' => 'XI TITL 1',
            ],
            [
                'grade' => 'XI',
                'name' => 'TITL 2',
                'vocation' => 'LISTRIK',
                'uuid' => 'XI TITL 2',
            ],
            [
                'grade' => 'XI',
                'name' => 'TITL 3',
                'vocation' => 'LISTRIK',
                'uuid' => 'XI TITL 3',
            ],
            [
                'grade' => 'X',
                'name' => 'TP 1',
                'vocation' => 'MESIN',
                'uuid' => 'X TP 1',
            ],
            [
                'grade' => 'X',
                'name' => 'TP 2',
                'vocation' => 'MESIN',
                'uuid' => 'X TP 2',
            ],
            [
                'grade' => 'X',
                'name' => 'DGM',
                'vocation' => 'MESIN',
                'uuid' => 'X DGM',
            ],
            [
                'grade' => 'XI',
                'name' => 'TP 1',
                'vocation' => 'MESIN',
                'uuid' => 'XI TP 1',
            ],
            [
                'grade' => 'XI',
                'name' => 'TP 2',
                'vocation' => 'MESIN',
                'uuid' => 'XI TP 2',
            ],
            [
                'grade' => 'XI',
                'name' => 'DGM',
                'vocation' => 'MESIN',
                'uuid' => 'XI DGM',
            ],
            [
                'grade' => 'X',
                'name' => 'TKR',
                'vocation' => 'OTOMOTIF',
                'uuid' => 'X TKR',
            ],
            [
                'grade' => 'XI',
                'name' => 'TKR 1',
                'vocation' => 'OTOMOTIF',
                'uuid' => 'XI TKR 1',
            ],
            [
                'grade' => 'XI',
                'name' => 'TKR 2',
                'vocation' => 'OTOMOTIF',
                'uuid' => 'XI TKR 2',
            ],
            [
                'grade' => 'X',
                'name' => 'TKJ 1',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'X TKJ 1',
            ],
            [
                'grade' => 'X',
                'name' => 'TKJ 2',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'X TKJ 2',
            ],
            [
                'grade' => 'XI',
                'name' => 'TKJ',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'XI TKJ',
            ],
            [
                'grade' => 'X',
                'name' => 'RPL',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'X RPL',
            ],
            [
                'grade' => 'X',
                'name' => 'SIJA',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'X SIJA',
            ],
            [
                'grade' => 'XI',
                'name' => 'RPL',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'XI RPL',
            ],
            [
                'grade' => 'XI',
                'name' => 'SIJA',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'XI SIJA',
            ],
            [
                'grade' => 'XII',
                'name' => 'SIJA',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'XII SIJA',
            ],
            [
                'grade' => 'X',
                'name' => 'DKV',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'X DKV',
            ],
            [
                'grade' => 'XI',
                'name' => 'DKV',
                'vocation' => 'INFORMATIKA',
                'uuid' => 'XI DKV',
            ],
        ];

        foreach ($classes as $data) {
            $uuid = Str::replaceFirst(' ', '-', $data['name']);
            $teacher = Teacher::where('class_name', $data['uuid'])->first();
            if ($data['vocation'] == 'INFORMATIKA') {

                DB::table('student_classes')->insert([
                    'grade' => $data['grade'],
                    'name' => $data['name'],
                    'vocation' => $data['vocation'],
                    'full_name' => $data['uuid'],
                    'uuid' => "{$data['grade']}-{$uuid}",
                    'teacher_id' => $teacher->id,
                    // 'teacher_id'=>1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
