<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>

    <table>
        <thead>
            <tr>
                <th>Student_id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Departments</th>
                <th>Midterm Grades</th>
                <th>Final Grades</th>
                <th>Commulative Grades</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($students as $students)
                <tr>
                    <td>{{ $students->student_id }}</td>
                    <td>{{ $students->first_name }}</td>
                    <td>{{ $students->middle_name }}</td>
                    <td>{{ $students->last_name }}</td>
                    <td>{{ $students->departments }}</td>
                    <td>{{ $students->midterm_grade }}</td>
                    <td>{{ $students->final_grade }}</td>
                    <td>{{ ($students->final_grade + $students->midterm_grade)/2}}</td>

                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>