<?php

namespace App\Helpers;

use Carbon\Carbon;

class SiteHelpers
{
    public static function date_indo($tanggal)
    {
        if (!$tanggal) return '-';

        $bulan = [
            1 => 'Jan', 2 => 'Feb', 3 => 'Mar',
            4 => 'Apr', 5 => 'May', 6 => 'Jun',
            7 => 'Jul', 8 => 'Agt', 9 => 'Sep',
            10 => 'Okt', 11 => 'Nov', 12 => 'Dec'
        ];

        // Pastikan tanggal valid
        try {
            $tgl = explode('-', $tanggal);
            $tahun = $tgl[0];
            $bulan_ke = (int)$tgl[1];
            $hari = (int)$tgl[2];

            return $hari . ' ' . $bulan[$bulan_ke] . ' ' . $tahun;
        } catch (\Exception $e) {
            return $tanggal; // fallback kalau gagal parsing
        }
    }
}
