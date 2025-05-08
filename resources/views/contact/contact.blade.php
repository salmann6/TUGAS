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

<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukan Nama"><br>
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email"><br>
    <input type="number" name="telepon" value="{{ old('telepon') }}" placeholder="Masukan No Telp"><br>
    <input type="text" name="message" value="{{ old('message') }}" placeholder="Masukan Pesan Anda"><br>
    <button type="submit">Kirim</button>
</form>