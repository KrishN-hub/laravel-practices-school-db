<html>

<head>
    <title>Show Staff Details</title>
</head>

<style>
    table{
        border:  1px solid #020202;
        text-align: left;
        border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border: 1px solid #020202;
    }
</style>
<body>

<h1>Show Staff Details</h1>
<a href="/staffs" >Back</a>
<hr>

<table >
    <tr>
        <th>ID</th>
        <td>{{ $staff->id }}</td>
    </tr>
    <tr>
        <th>Registration Number</th>
        <td>{{ $staff->registration_no }}</td>
    </tr>
    <tr>
        <th>Nic Number</th>
        <td>{{ $staff->nic_no }}</td>
    </tr>
    <tr>
        <th>First Name</th>
        <td>{{ $staff->first_name }}</td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td>{{ $staff->last_name }}</td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td>{{ $staff->full_name }}</td>
    </tr>
    <tr>
        <th>Title</th>
        <td>{{ $staff->tittle }}</td>
    </tr>
    <tr>
        <th>Gender</th>
        <td>{{ $staff->gender }}</td>
    </tr>
    <tr>
        <th>Indexes</th>
        <td>{{ $staff->indexes }}</td>
    </tr>
    <tr>
        <th>Date of Birth</th>
        <td>{{ $staff->date_of_birth }}</td>
    </tr>
    <tr>
        <th>Permanent Address</th>
        <td>{{ $staff->permanent_address }}</td>
    </tr>
    <tr>
        <th>Resident Address</th>
        <td>{{ $staff->resident_address }}</td>
    </tr>
    <tr>
        <th>Home Telephone Number</th>
        <td>{{ $staff->tele_no_home }}</td>
    </tr>
    <tr>
        <th>Mobile Number</th>
        <td>{{ $staff->tele_no_mobile }}</td>
    </tr>
    <tr>
        <th>Date of First Appointment</th>
        <td>{{ $staff->date_of_first_appointment }}</td>
    </tr>
    <tr>
        <th>Category of Appointment</th>
        <td>{{ $staff->category_of_appointment }}</td>
    </tr>
    <tr>
        <th>Date of First Appointment at Present</th>
        <td>{{ $staff->date_of_first_appointment_at_present }}</td>
    </tr>
    <tr>
        <th>Nature of Present Appointment</th>
        <td>{{ $staff->nature_of_present_appointment }}</td>
    </tr>
    <tr>
        <th>Present Grade & Service ID</th>
        <td>{{ $staff->present_grade_and_service_id }}</td>
    </tr>
    <tr>
        <th>Date of Appointment for Present Grade</th>
        <td>{{ $staff->date_of_appointment_for_present_grade }}</td>
    </tr>
    <tr>
        <th>W and OP Number</th>
        <td>{{ $staff->w_and_op_number }}</td>
    </tr>
    <tr>
        <th>Civil Status</th>
        <td>{{ $staff->civil_status }}</td>
    </tr>
    <tr>
        <th>Stream ID</th>
        <td>{{ $staff->stream_id }}</td>
    </tr>
    <tr>
        <th>User ID</th>
        <td>{{ $staff->user_id }}</td>
    </tr>
</table>
    <hr>


</body>





</html>