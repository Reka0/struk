<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .download-btn {
            text-align: center;
        }

        .download-btn a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .download-btn a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Struk Pembayaran</h1>
        <table>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Produk A</td>
                <td>Rp 50,000</td>
                <td>2</td>
                <td>Rp 100,000</td>
            </tr>
            <tr>
                <td>Produk B</td>
                <td>Rp 75,000</td>
                <td>1</td>
                <td>Rp 75,000</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align:right"><strong>Total Pembayaran</strong></td>
                <td><strong>Rp 175,000</strong></td>
            </tr>
        </table>
        <div class="download-btn">
            <a href="{{ route('unduh.struk') }}">Unduh Struk</a>
        </div>
    </div>
</body>

</html>
