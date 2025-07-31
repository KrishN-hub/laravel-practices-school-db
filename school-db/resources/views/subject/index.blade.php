<html>
<head>
    <title>Subject List</title>
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