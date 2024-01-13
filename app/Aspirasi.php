<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;
    protected $table = 'aspirasi';
    public $incrementing = true;
    public $timestamps = true;

    const LINGKUP = [
        '' => '',
        'Sarana Prasarana',
        'Akademik',
        'UKT',
        'Pengawasan Eksekutif Mahasiswa',
        'Kebijakan Kampus (Rektorat)',
        'Kesejahteraan Mahasiswa',
        'UKM',
        'Layanan Umum UB',
        'Kerja Sama',
        'Lainnya',
    ];

    const SASARAN = [
        '' => '',
        'DEWAN PERWAKILAN MAHASISWA UB',
        'EKSEKUTIF MAHASISWA UB',
        'Wakil Rektor Bidang Akademik',
        'Wakil Rektor Bidang Keuangan dan Sumber Daya',
        'Wakil Rektor Bidang Kemahasiswaan, Alumni dan Kewirausahaan Mahasiswa',
        'Wakil Rektor Bidang Perencanaan, Kerjasama, dan Internasionalisasi',
        'Wakil Rektor Bidang Riset dan Inovasi',
        'Sekretaris Universitas',
        'DEKANAT FAKULTAS ILMU ADMINSITRASI',
        'Lainnya',
    ];

    public static function convertImage($nama)
    {

        $realName = '';
        foreach (explode(' ', $nama) as $row) {
            $realName .= substr($row, 0, 1);
        }
        $color = '#';
        $colorHexLighter = array("9", "A", "B", "C", "D", "E", "F");
        for ($x = 0; $x < 6; $x++) :
            $color .= $colorHexLighter[array_rand($colorHexLighter, 1)];
        endfor;

        return [
            'name' => $realName,
            'background' => substr($color, 0, 7),
        ];
    }
}
