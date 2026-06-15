# Tugas 1: Auto-Generate Kode Anggota

## Deskripsi

Implementasi fitur auto-generate kode anggota pada sistem perpustakaan menggunakan Laravel. Kode anggota akan dibuat secara otomatis saat pengguna membuka halaman tambah anggota.

## Format Kode Anggota

```
AGT-[TAHUN]-[NOMOR_URUT]
```

### Contoh

* AGT-2026-001
* AGT-2026-002
* AGT-2026-003

Nomor urut akan bertambah secara otomatis berdasarkan data anggota terakhir yang terdaftar pada tahun yang sama.

## Implementasi

Fitur ini diimplementasikan dengan melakukan perubahan pada beberapa bagian aplikasi, yaitu:

1. **AnggotaController**

   * Menambahkan helper function `generateKodeAnggota()`.
   * Memodifikasi method `create()` untuk mengirimkan kode anggota otomatis ke view.

2. **Form Tambah Anggota (`create.blade.php`)**

   * Menampilkan kode anggota secara otomatis pada field `kode_anggota`.
   * Field dibuat `readonly` sehingga tidak dapat diubah oleh pengguna.

3. **StoreAnggotaRequest**

   * Menambahkan validasi untuk memastikan `kode_anggota` bersifat wajib dan unik.

4. **Model Anggota**

   * Menambahkan atribut `kode_anggota` ke dalam `$fillable` agar dapat disimpan ke database.

## Screenshoot
<img width="866" height="371" alt="Screenshot 2026-06-15 202243" src="https://github.com/user-attachments/assets/d0ef0e2e-098e-4ae2-b73c-97be086e5786" />


Saat halaman tambah anggota dibuka, sistem akan menghasilkan kode anggota baru secara otomatis sesuai format yang telah ditentukan. Kode tersebut akan tersimpan ke database ketika data anggota berhasil ditambahkan.
