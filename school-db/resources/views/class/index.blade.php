<html>
    <head>
        <title>Class List</title>
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
    </head>
    <body>

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
                        <td><a href="classes/{{$class->id}}" >show</a></td>
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
    </body>





</html>