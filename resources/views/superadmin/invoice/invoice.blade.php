<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            background: #fff;
        }
        .invoice-title {
            font-size: 32px;
            color: #333;
        }
        .invoice-header {
            margin-bottom: 20px;
        }
        .table th {
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="row invoice-header">
            <div class="col-md-6">
                <h2 class="invoice-title">Invoice</h2>
            </div>
            <div class="col-md-6 text-end">
                <strong>Invoice No:</strong> {{ $invoice->Invoicenumber }}<br>
                <strong>Date:</strong> {{ $invoice->date }}
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Billed To:</strong><br>
                {{ $invoice->name }}<br>
                {{ $invoice->contact }}
            </div>
            <div class="col-md-6 text-end">
                <strong>Description:</strong><br>
                {{ $invoice->description }}
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Invoice Type</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoiceDetails as $key => $detail)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $detail->Invoice_type }}</td>
                    <td>{{ $detail->amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-6">
                <strong>Total:</strong> {{ $totalAmount }} PKR
            </div>
            <div class="col-md-6 text-end">
                <strong>Thank you for your business!</strong>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <button onclick="window.print()" class="btn btn-primary">Print Invoice</button>
        </div>
    </div>
</body>
</html>
