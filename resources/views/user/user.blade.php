<h2>form tambahkan user</h2>

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

<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukan Nama"><br>
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email"><br>
    <input type="password" name="password" placeholder="Masukan Password"><br>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Email"><br>
    <button type="submit">Simpan</button>
</form>