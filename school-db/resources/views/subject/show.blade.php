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
</body>
</html>


