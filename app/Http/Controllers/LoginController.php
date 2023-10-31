public function login(Request $request)
{
    // Di sini, Anda dapat menambahkan logika otentikasi atau tindakan lainnya.

    if (login_berhasil) {
        return view('home'); // Arahkan ke tampilan beranda
    }

    // Logika lain jika login gagal
}
