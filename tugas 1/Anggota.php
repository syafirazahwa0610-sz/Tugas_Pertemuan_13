<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    
    protected $fillable = [
        'kode_anggota',
        'nama',
        'email',
        'telepon',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'pekerjaan',
        'tanggal_daftar',
        'status',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_daftar' => 'date',
    ];

    /*
    |--------------------------------------------------------------------------
    | ACCESSOR
    |--------------------------------------------------------------------------
    */

    // Badge Status
    public function getStatusBadgeAttribute(): string
    {
        if ($this->status == 'Aktif') {
            return '<span class="badge bg-success">Aktif</span>';
        }

        return '<span class="badge bg-secondary">Nonaktif</span>';
    }

    // Badge Jenis Kelamin
    public function getJenisKelaminBadgeAttribute(): string
    {
        if ($this->jenis_kelamin == 'Laki-laki') {
            return '<span class="badge bg-primary">Laki-laki</span>';
        }

        return '<span class="badge bg-danger">Perempuan</span>';
    }

    /*
    |--------------------------------------------------------------------------
    | QUERY SCOPE
    |--------------------------------------------------------------------------
    */

    // Scope anggota aktif
    public function scopeAktif($query)
    {
        return $query->where('status', 'Aktif');
    }

    // Scope anggota nonaktif
    public function scopeNonaktif($query)
    {
        return $query->where('status', 'Nonaktif');
    }

    // Scope jenis kelamin
    public function scopeJenisKelamin($query, $jk)
    {
        return $query->where('jenis_kelamin', $jk);
    }

    // Scope terdaftar bulan ini
    public function scopeTerdaftarBulanIni($query)
    {
        return $query->whereMonth('created_at', Carbon::now()->month)
                     ->whereYear('created_at', Carbon::now()->year);
    }
}