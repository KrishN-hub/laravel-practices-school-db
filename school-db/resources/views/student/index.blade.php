<html>

<head>
    <title>Student List</title>
    <style>
        table {
            border: 1px solid #020202;
            text-align: left;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #020202;
        }
    </style>
</head>
<body>
    <h1>Student List</h1>
    <table>
        <tr>
            <th> ID</th>
            <th>Admission Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Student Nic Number</th>
            <th>Religion</th>
            <th>Birth Certificate Number</th>
            <th>Telephone Number</th>
            <th>Email Address</th>
            <th>Class ID</th>
            <th>Medium</th>
            <th>Former School ID</th>
            <th>Date of Addmission</th>
            <th>Mode of Travel</th>
            <th>Blood Group</th>
            <th>Permanent Address</th>
            <th>Resident Address</th>
            <th>Family ID</th>
            <th>Father's Nic Number</th>
            <th>User ID</th>
            <th>Actions</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->admission_no }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->date_of_birth }}</td>
            <td>{{ $student->stu_nic_no }}</td>
            <td>{{ $student->religion }}</td>
            <td>{{ $student->birth_certificate_no }}</td>
            <td>{{ $student->tp_No }}</td>
            <td>{{ $student->email_address }}</td>
            <td>{{ $student->class_id }}</td>
            <td>{{ $student->medium }}</td>
            <td>{{ $student->former_school_id }}</td>
            <td>{{ $student->date_of_addmission }}</td>
            <td>{{ $student->mode_of_travel }}</td>
            <td>{{ $student->blood_group }}</td>
            <td>{{ $student->per_address }}</td>
            <td>{{ $student->resident_address }}</td>
            <td>{{ $student->family_id }}</td>
            <td>{{ $student->fa_nic_no }}</td>
            <td>{{ $student->user_id }}</td>
            <td>
                <a href="students/{{$student->id}}">Show</a>
                {{-- <a href="{{ route('student.edit', $student->id) }}">Edit</a> --}}
                {{-- <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form> --}}
            </td>
        </tr>
        @endforeach
    </table>
</body>



</html>