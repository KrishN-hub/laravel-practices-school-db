<html>
    <head>
        <title>Show Details</title>
        <style>
            table{
                width: 10%
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

    </head>
    <body>
    <h1>Show Details</h1>
    <a href="/classes" >Back</a>
    <hr>

    <table border = "1">

        <tr>
            <th>ID</th>
            <td>{{ $class->id }}</td>
        </tr>
        <tr>
            <th>Class Name</th>
            <td>{{ $class->class_name }}</td>
        </tr>
        <tr>
            <th>Class Group</th>
            <td>{{ $class->class_group }}</td>
        </tr>
        <tr>
            <th>Class Order</th>
            <td>{{ $class->class_order }}</td>
        </tr>
        <tr>
            <th>Print Name</th>
            <td>{{ $class->print_name }}</td>
        </tr>
        <tr>
            <th>User ID</th>
            <td>{{ $class->user_id }}</td>
        </tr>
    </table>
    <hr>
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
                <a href="/students/{{$student->id}}">Show</a>
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
</hr>
    <h1>
        Staff List

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Registration Number</th>
            <th>Nic Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            <th>Tittle</th>
            <th>Gender</th>
            <th>Indexes</th>
            <th>Date of Birth</th>
            <th>Permanent Address</th>
            <th>resident Address</th>
            <th>Home Telephone Number</th>
            <th>Mobile Number</th>
            <th>Date of First Appointment</th>
            <th>Category of Appointment</th>
            <th>date of First Appointment at Present</th>
            <th>Nature of Present Appointment</th>
            <th>Preaent Grade & Service ID</th>
            <th>Date of Appointment for Present Grade</th>
            <th>W and OP number</th>
            <th>Civil Status</th>
            <th>Strem ID</th>
            <th> User ID</th>
            <th>Actions</th>


        </tr>
        @foreach($staff as $staff)
            <tr>
                <td>{{ $staff->id }}</td>
                <td>{{ $staff->registration_no }}</td>
                <td>{{ $staff->nic_no }}</td>
                <td>{{ $staff->first_name }}</td>
                <td>{{ $staff->last_name }}</td>
                <td>{{ $staff->full_name }}</td>
                <td>{{ $staff->tittle }}</td>
                <td>{{ $staff->gender }}</td>
                <td>{{ $staff->indexes }}</td>
                <td>{{ $staff->date_of_birth }}</td>
                <td>{{ $staff->permanent_address }}</td>
                <td>{{ $staff->resident_address }}</td>
                <td>{{ $staff->tele_no_home }}</td>
                <td>{{ $staff->tele_no_mobile }}</td>
                <td>{{ $staff->date_of_first_appointment }}</td>
                <td>{{ $staff->category_of_appointment }}</td>
                <td>{{ $staff->date_of_first_appointment_at_present }}</td>
                <td>{{ $staff->nature_of_present_appointment }}</td>
                <td>{{ $staff->present_grade_and_service_id }}</td>
                <td>{{ $staff->date_of_appointment_for_present_grade }}</td>
                <td>{{ $staff->w_and_op_number }}</td>
                <td>{{ $staff->civil_status }}</td>
                <td>{{ $staff->stream_id }}</td>
                <td>{{ $staff->user_id }}</td>




                <td>
                    <a href="staffs/{{$staff->id}}" >show</a>
                    {{-- Uncomment the following lines if you want to add edit and delete functionality --}}
                    {{-- <a href="{{ route('staff.edit', $member->id) }}">Edit</a> --}}
                    {{-- <form action="{{ route('staff.destroy', $member->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </table>
</hr>
<h1>Subject List</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Subject Name</th>
        <th>Subject Index</th>
        <th>Subject Group</th>
        <th>Subject Order</th>
        <th>Subject Number</th>
        <th>Is Compulsory</th>
        <th>User ID</th>
        <th>Actions</th>
    </tr>
    @foreach($subjects as $subject)
    <tr>
        <td>{{ $subject->id }}</td>
        <td>{{ $subject->subject_name }}</td>
        <td>{{ $subject->subject_index }}</td>
        <td>{{ $subject->subject_group }}</td>
        <td>{{ $subject->subject_order }}</td>
        <td>{{ $subject->subject_number }}</td>
        <td>{{ $subject->is_compulsory }}</td>
        <td>{{ $subject->user_id }}</td>
        <td>
            <a href="/subjects/{{ $subject->id }}">Show</a>

            {{-- <a href="/subjects/{{ $subject->id }}/edit">Edit</a>
                            <form action="/subjects/{{ $subject->id }}" method="POST" style="display:inline;">
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