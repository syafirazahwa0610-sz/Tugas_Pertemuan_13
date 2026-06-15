# Tugas 2 - Export Anggota ke Excel

Fitur ini digunakan untuk mengekspor data anggota perpustakaan ke dalam file Excel (`.xlsx`) menggunakan package Laravel Excel (`maatwebsite/excel`).

## Langkah Implementasi
1. Menginstall package Laravel Excel.
2. Membuat class `AnggotaExport`.
3. Menambahkan method `export()` pada `AnggotaController`.
4. Menambahkan route `anggota.export`.
5. Menambahkan tombol **Export Excel** pada halaman daftar anggota.

## File yang Digunakan
- `app/Exports/AnggotaExport.php`
- `app/Http/Controllers/AnggotaController.php`
- `routes/web.php`
- `resources/views/anggota/index.blade.php`

## Screenshoot
<img width="874" height="394" alt="Screenshot 2026-06-15 210043" src="https://github.com/user-attachments/assets/88594bb7-a39d-4f16-9579-818bd5e371d1" />
<img width="863" height="443" alt="Screenshot 2026-06-15 210129" src="https://github.com/user-attachments/assets/b4e1fd46-e2f3-40d6-b30b-d0a09b97fc93" />

