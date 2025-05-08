<h2>Kontak admin</h2>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif
@if ($errors->any())
    <ul>
        @foreach ($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('admin.store') }}">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukan Nama"><br>
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email"><br>
    <input type="text" name="telepon" value="{{ old('telepon') }}" placeholder="Masukan No Telp"><br>
    <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukan Alamat Anda"><br>
    <select name="role">
        <option value="super-admin" value="{{ old('role') == 'super-admin' ? 'selected' : ''}}">Super Admin</option>
        <option value="kasir" value="{{ old('role') == 'kasir' ? 'selected' : ''}}">Kasir</option>
    </select> <br>
    <button type="submit">Kirim</button>
</form>