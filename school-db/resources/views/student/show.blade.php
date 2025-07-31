<html>
<head>
    <title>Show Student Details</title>
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
<h1>Show Student Details</h1>
<a href="/students" >Back</a>
<hr>

<table >
    <tr>
        <th>ID</th>
        <td>{{ $student->id }}</td>
    </tr>
    <tr>
        <th>Admission Number</th>
        <td>{{ $student->admission_no }}</td>
    </tr>
    <tr>
        <th>First Name</th>
        <td>{{ $student->first_name }}</td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td>{{ $student->last_name }}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{ $student->gender }}</td>
    </tr>
    <tr>
        <th>Date of Birth</th>
        <td>{{ $student->date_of_birth }}</td>
    </tr>
    <tr>
        <th>Student Nic Number</th>
        <td>{{ $student->stu_nic_no }}</td>
    </tr>
    <tr>
        <th>Religion</th>
        <td>{{ $student->religion }}</td>
    </tr>
    <tr>
        <th>Birth Certificate Number</th>
        <td>{{ $student->birth_certificate_no }}</td>
    </tr>
    <tr>
        <th>Telephone Number</th>
        <td>{{ $student->tp_No }}</td>
    </tr>
    <tr>
        <th>Email Address</th>
        <td>{{ $student->email_address }}</td>
    </tr>
    <tr>
        <th>Class ID</th>
        <td>{{ $student->class_id }}</td>
    </tr>
    <tr>
        <th>Medium</th>
        <td>{{ $student->medium }}</td>
    </tr>
    <tr>
        <th>Former School ID</th>
        <td>{{ $student->former_school_id }}</td>
    </tr>
    <tr>
        <th>Date of Admission</th>
        <td>{{ $student->date_of_addmission }}</td>
    </tr>
    <tr>
        <th>Mode of Travel</th>
        <td>{{ $student->mode_of_travel }}</td>
    </tr>
    <tr>
        <th>Blood Group</th>
        <td>{{ $student->blood_group }}</td>
    </tr>
    <tr>
        <th>Permanent Address</th>
        <td>{{ $student->permanent_address }}</td>
    </tr>
    <tr>
        <th>Resident Address</th>
        <td>{{ $student->resident_address }}</td>
    </tr>
    <tr>
        <th>Family ID</th>
        <td>{{ $student->family_id }}</td>
    </tr>
    <tr>
        <th>Father's Nic Number</th>
        <td>{{ $student->father_nic_no }}</td>
    </tr>
    <tr>
        <th>User ID</th>
        <td>{{ $student->user_id }}</td>
    </tr>
</table>
</body>
</html>