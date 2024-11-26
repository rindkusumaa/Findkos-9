<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FINDKOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<nav class="mb-70 navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" height="48" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Payment</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="#">Sign In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h2 class="text-center">Pembayaran Kos Bulanan</h2>

    <!-- Payment Form -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Pembayaran</div>

                <div class="card-body">
                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form to submit payment -->
                    {{-- <form action="{{ route('kos.payment.process') }}" method="POST"> --}}
                        @csrf
                        
                        <!-- User Name (Auto-filled or Editable) -->
                        <div class="form-group">
                            <label for="name">Nama Penghuni</label>
                            {{-- <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" readonly> --}}
                        </div>

                        <!-- Room Number or ID -->
                        <div class="form-group">
                            <label for="room_number">Nomor Kamar</label>
                            {{-- <input type="text" name="room_number" class="form-control" value="{{ Auth::user()->room_number }}" readonly> --}}
                        </div>

                        <!-- Month of Payment -->
                        <div class="form-group">
                            <label for="month">Bulan Pembayaran</label>
                            <select name="month" class="form-control" required>
                                {{-- @foreach($months as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        <!-- Payment Amount (could be pre-determined or editable) -->
                        <div class="form-group">
                            <label for="amount">Jumlah Pembayaran (IDR)</label>
                            {{-- <input type="text" name="amount" class="form-control" value="{{ $kos_price }}" readonly> --}}
                        </div>

                        <!-- Payment Method -->
                        <div class="form-group">
                            <label for="payment_method">Metode Pembayaran</label>
                            <select name="payment_method" class="form-control" required>
                                <option value="bank_transfer">Transfer Bank</option>
                                <option value="ewallet">E-Wallet</option>
                            </select>
                        </div>

                        <!-- Bank Transfer Information (Optional based on method chosen) -->
                        <div class="form-group" id="bank-info">
                            <label for="bank_account">Nomor Rekening Bank</label>
                            <input type="text" name="bank_account" class="form-control" placeholder="Masukkan nomor rekening">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mt-3">Bayar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript to handle display logic -->
<script>
    document.querySelector('select[name="payment_method"]').addEventListener('change', function(e) {
        const bankInfo = document.getElementById('bank-info');
        if (e.target.value === 'bank_transfer') {
            bankInfo.style.display = 'block';
        } else {
            bankInfo.style.display = 'none';
        }
    });
</script>
{{-- @endsection --}}
