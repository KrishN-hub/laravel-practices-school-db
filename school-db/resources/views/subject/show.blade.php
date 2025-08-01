<html>
<head>
    <title>Show Subject Details</title>
    </head>
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
<body>
<h1>Show Subject Details</h1>
<a href="/subjects">Back</a>
<hr>
<table>
    <tr>
        <th>ID</th>
        <td>{{ $subject->id }}</td>
    </tr>
    <tr>
        <th>Subject Name</th>
        <td>{{ $subject->subject_name }}</td>
    </tr>
    <tr>
        <th>Subject Index</th>
        <td>{{ $subject->subject_index }}</td>
    </tr>
    <tr>
        <th>Subject Group</th>
        <td>{{ $subject->subject_group }}</td>
    </tr>
    <tr>
        <th>Subject Order</th>
        <td>{{ $subject->subject_order }}</td>
    </tr>
    <tr>
        <th>Subject Number</th>
        <td>{{ $subject->subject_number }}</td>
    </tr>
    <tr>
        <th>Is Compulsory</th>
        <td>{{ $subject->is_compulsory ? 'Yes' : 'No' }}</td>
    </tr>
    <tr>
        <th>ID</th>
        <td>{{ $subject->id }}</td>
    </tr>
    <tr>
        <th>Subject Name</th>
        <td>{{ $subject->subject_name }}</td>
    </tr>
    <tr>
        <th>Subject Index</th>
        <td>{{ $subject->subject_index }}</td>
    </tr>
    <tr>
        <th>Subject Group</th>
        <td>{{ $subject->subject_group }}</td>
    </tr>
    <tr>
        <th>Subject Order</th>
        <td>{{ $subject->subject_order }}</td>
    </tr>
    <tr>
        <th>Subject Number</th>
        <td>{{ $subject->subject_number }}</td>
    </tr>
    <tr>
        <th>User ID</th>
        <td>{{ $subject->user_id }}</td>
    </tr>
</table>
</hr>
<h1>
    Class List
    </h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Class Name</th>
        <th>Class Group</th>
        <th>class Order</th>
        <th>Print Name</th>
        <th>User ID</th>
        <th>Actions</th>
    </tr>
    @foreach($classes as $class)
        <tr>
            <td>{{ $class->id }}</td>
            <td>{{ $class->class_name }}</td>
            <td>{{ $class->class_group }}</td>
            <td>{{ $class->class_order }}</td>
            <td>{{ $class->print_name }}</td>
            <td>{{ $class->user_id }}</td>
            <td>
                <td><a href="/classes/{{$class->id}}" >show</a></td>
                {{-- <a href="{{ route('class.edit', $class->id) }}">Edit</a> --}}
                {{-- <form action="{{ route('class.destroy', $class->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button> --}}
                {{-- </form> --}}
            </td>
        </tr>
    @endforeach
</table>
</hr>
<h1>
    Staff List
</h1>
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
    @foreach($staffs as $staff)
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
                <a href="/staffs/{{$staff->id}}" >show</a>
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
</body>
</html>


