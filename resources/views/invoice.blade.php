<!-- resources/views/pdf/invoice.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice PDF</title>
    <style>
        /* Basic styling for the PDF */
        body { font-family: Arial, sans-serif; color: #333; }
        h2 { text-align: center; margin-bottom: 20px; }
        
        /* Table styling */
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 8px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f2f2f2; font-weight: bold; }
        
        /* Footer and header for additional styling */
        .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #555; }
    </style>
</head>
<body>
    <!-- Header for the Invoice PDF -->
    <h2>Invoice List</h2>
    
    <!-- Invoice Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through invoices and display each one in a table row -->
            @foreach($invoices1 as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ $invoice->name }}</td>
                <td>${{ number_format($invoice->amount, 2) }}</td>
                <td>{{ $invoice->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Footer for any additional info -->
    <div class="footer">
        Generated on {{ now()->format('Y-m-d H:i:s') }}
    </div>
</body>
</html>
