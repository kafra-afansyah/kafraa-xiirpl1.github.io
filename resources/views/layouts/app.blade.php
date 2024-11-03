<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Barang</title>
    <style>
        /* CSS untuk container */
        .container {
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
            padding: 1rem;
        }
        
        .mt-4 {
            margin-top: 1.5rem;
        }
        
        /* Toggle button */
        .navbar-toggler {
            display: none; /* Hide for now */
        }
    </style>
</head>
<body>
    <nav class="navbar">
     
        <div class="navbar-nav">
            <div class="nav-item">
                <a class="nav-link" href="{{ route('barang.index') }}">Daftar Barang</a>
            </div>
            
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
