<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages | Portfolio Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0a0a0a;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px 20px;
        }
        .card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            color: white;
            backdrop-filter: blur(10px);
        }
        .table {
            color: #d1d1d1;
        }
        .table th {
            color: #ff750f;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }
        .table td {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            vertical-align: middle;
        }
        .badge-date {
            background-color: rgba(255, 117, 15, 0.1);
            color: #ff750f;
            border: 1px solid rgba(255, 117, 15, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">📬 Contact Inquiries</h2>
            <a href="/" class="btn btn-outline-light btn-sm">Back to Portfolio</a>
        </div>

        <div class="card p-4">
            @if($messages->isEmpty())
                <div class="text-center py-5 text-muted">
                    <h3>No messages yet</h3>
                    <p class="mb-0">When someone submits your contact form, their message will appear here.</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 15%">Name</th>
                                <th style="width: 20%">Email</th>
                                <th style="width: 20%">Subject</th>
                                <th style="width: 35%">Message</th>
                                <th style="width: 10%">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $msg)
                                <tr>
                                    <td class="fw-semibold text-white">{{ $msg->name }}</td>
                                    <td><a href="mailto:{{ $msg->email }}" class="text-info text-decoration-none">{{ $msg->email }}</a></td>
                                    <td class="text-white">{{ $msg->subject }}</td>
                                    <td style="white-space: pre-line;">{{ $msg->message }}</td>
                                    <td>
                                        <span class="badge badge-date">{{ $msg->created_at->format('M d, Y') }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
