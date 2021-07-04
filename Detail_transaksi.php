<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    use HasFactory;
    protected $table = "detail_transaksis";

    public function header_transaksi(){
        return $this->belongsTo(Header_transaksi::class);
    }

    protected $fillable=[        
        'id_header_transaksi','id_produk','jumlah'
    ];

    static function tambah_detail_transaksi($id_produk,$id_header_transaksi,$jumlah){
        Detail_transaksi::create([
            "id_produk" => $id_produk,
            "id_header_transaksi" => $id_header_transaksi,
            "jumlah" => $jumlah
        ]);
    }
}
