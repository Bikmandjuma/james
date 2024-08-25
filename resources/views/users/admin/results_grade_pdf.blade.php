<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .text-primary {
            color: blue;
        }
        .text-danger {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Student Results</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Score / %</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($students) && $students->count())
                @foreach($students as $student)
                    @if(!empty($student->pass_fail_status) && $student->pass_fail_status->count())
                        @foreach($student->pass_fail_status as $result)
                            <tr>
                                <td>{{ $result['firstname'] }}</td>
                                <td>{{ $result['lastname'] }}</td>
                                <td>{{ $result['gender'] }}</td>
                                <td>{{ $result['email'] }}</td>
                                <td class="{{ $result['status'] == 'Pass' ? 'text-primary' : 'text-danger' }}">
                                    {{ $result['total_score'] }}
                                </td>
                                <td class="{{ $result['status'] == 'Pass' ? 'text-primary' : 'text-danger' }}">
                                    {{ $result['status'] }}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            @else
                <tr>
                    <td colspan="6">No students found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
