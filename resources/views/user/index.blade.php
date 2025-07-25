<<<<<<< HEAD
<h2>Form Tambah User</h2>
<p style="color: green;">{{ session('success') }}</p>

@if($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"><br>
    <input type="submit" value="Simpan">
</form>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input</h1>

    <!-- Menampilkan pesan kesalahan -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
        <br>
        <label for="message">Message:</label>
        <textarea name="message" id="message">{{ old('message') }}</textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
>>>>>>> 44fbb87 (BLADE TAMPLATE)
