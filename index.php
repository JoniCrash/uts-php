<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            border: 1px solid black;
        }
        .header {
            background-color: green;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .table-container {
            width: 100%;
            border-collapse: collapse;
        }
        .table-container, .table-container td, .table-container th {
            border: 1px solid black;
        }
        .table-container td, .table-container th {
            padding: 10px;
            text-align: left;
        }
        .table-container th {
            background-color: #f2f2f2;
        }
        .form-container {
            padding: 20px;
        }
        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .form-row label {
            width: 80px; /* Adjust this width to align properly */
            margin-right: 10px;
        }
        .form-row input[type="text"] {
            flex: 1;
            padding: 10px;
        }
        .form-container input[type="button"] {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }
        .form-container input[type="button"]:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>PEMROGRAMAN PHP</h1>
    </div>
    <table class="table-container">
        <tr>
            <td>NIM</td>
            <td>isian NIM</td>
            <td>UMUR</td>
            <td>0 Tahun</td>
        </tr>
        <tr>
            <td colspan="2">NAMA</td>
            <td colspan="2">isian NAMA</td>
        </tr>
    </table>
    <div class="form-container">
        <form>
            <div class="form-row">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim">
            </div>
            <div class="form-row">
                <label for="nama">NAMA</label>
                <input type="text" id="nama" name="nama">
            </div>
            <div class="form-row">
                <label for="umur">UMUR</label>
                <input type="text" id="umur" name="umur">
            </div>
            <input type="button" value="Tampil">
        </form>
    </div>
</div>

</body>
</html>
