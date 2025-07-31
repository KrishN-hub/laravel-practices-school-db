<html>
    <head>
        <title>Show Details</title>
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
</body>

</html>