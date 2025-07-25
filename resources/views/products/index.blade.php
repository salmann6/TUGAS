<<<<<<< HEAD
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce Products</title>
    </head>

    <body>
        <div>
            <h1 class="font-bold text-3xl mb-4">Daftar Produk</h1>
            <ul class="ml-4 text-white">
                @foreach ($products as $id => $product)
                    <li><a href="{{ url('/products/' . $id) }}" class="bg-black flex w-2xs mb-1 rounded-2xl p-2">
                            {{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.')}}
                        </a></li>

                @endforeach
            </ul>
        </div>
        <div>
            <h1 class="font-bold text-3xl mb-4">Tambah User</h1>
            <ul class="ml-4 text-white">
                <li>

                    <a href="{{ url('/user/create') }}" class="bg-black flex w-2xs mb-1 rounded-2xl p-2">Tambah User</a>
                </li>
            </ul>
        </div>
        <div>
            <h1 class="font-bold text-3xl mb-4">Tambah Admin</h1>
            <ul class="ml-4 text-white">
                <li>
                    <a href="{{ url('/admin/create') }}" class="bg-black flex w-2xs mb-1 rounded-2xl p-2">Login Admin </a>
                </li>
            </ul>
        </div>
        <div>
            <h1 class="font-bold text-3xl mb-4">Kontak</h1>
            <ul class="ml-4 text-white">
                <li>
                    <a href="{{ url('/contact/create') }}" class="bg-black flex w-2xs mb-1 rounded-2xl p-2">Kontak</a>
                </li>
            </ul>
        </div>
    </body>

</html>
=======
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="/product/{{ $product['id'] }}">{{ $product['name'] }} - Rp{{ $product['price'] }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
>>>>>>> 44fbb87 (BLADE TAMPLATE)
