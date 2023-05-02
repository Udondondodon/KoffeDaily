@extends('layouts.main')
@include('partials.fixed_nav')
@section("container")

<style>

body {
    overflow: hidden;
}
.container {
    max-width: 800px;
    margin: 0 auto;
}

h1 {
    text-align: center;
}

table {
    margin: 50px auto;
    border-collapse: collapse;
    width: 100%;
}

table td {
    padding: 10px;
    border: 1px solid #ddd;
}

table td:first-child {
    font-weight: bold;
    background-color: #f7f7f7;
    width: 30%;
}

.btn-buat-pesanan, .btn-batal {
    padding: 8px 16px;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.btn-buat-pesanan {
    background-color: #4CAF50;
    color: white;
}
.btn-batal {
    background-color: #f44336;
    color: white;
}
</style>

<body>
    <div class="container">
        <h1>Detail Pesanan</h1>
        <table>
            <tr>
                <td>Waktu Pemesanan:</td>
                <td>{{ $pesanan->waktu_pemesanan }}</td>
            </tr>
            <tr>
                <td>Nama Produk:</td>
                <td>{{ $pesanan->nama_produk }}</td>
            </tr>
            <tr>
                <td>Quantity:</td>
                <td>{{ $pesanan->quantity }}</td>
            </tr>
            <tr>
                <td>Nama Pemesan:</td>
                <td>{{ $pesanan->nama_pemesan }}</td>
            </tr>
            <tr>
                <td>Total Harga:</td>
                <td>Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
            </tr>
        </table>
        <tr>
            <td>Metode Pembayaran:</td>
            <td>
                <select name="metode_pembayaran">
                    <option value="Transfer Bank">Transfer Bank</option>
                    <option value="COD">COD</option>
                </select>
            </td>
        </tr>
        <div class="button-container mt-5">
            <a href="">
            <button class="btn-buat-pesanan">Buat Pesanan</button>
            </a>
            <a href="">
            <button class="btn-batal">Batal</button>
            </a>
        </div>
    </div>
</body>