<!DOCTYPE html>
<html>
<head>
    <title>Leaderboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Add this to separate logo and text */
            padding: 20px;
            background-color: #f2f2f2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            margin-right: 10px;
        }

        h1 {
            margin: 0;
            font-size: 24px;
            text-align: center; /* Center align the heading */
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('icon.png') }}" alt="Logo" width="40" height="40">
        </div>
        <h1>Leaderboard</h1>
        <div></div> <!-- Add an empty div for spacing on the right -->
    </div>
    <table>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Contributions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)    
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['contributions'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
