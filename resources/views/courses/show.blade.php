<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Course Details</h1>

    <table>
        <tr>
            <td><strong>Title:</strong></td>
            <td>{{ $course->title }}</td>
        </tr>
        <tr>
            <td><strong>Description:</strong></td>
            <td>{{ $course->description }}</td>
        </tr>
        <tr>
            <td><strong>Price:</strong></td>
            <td>${{ number_format($course->price, 2) }}</td>
        </tr>
        <tr>
            <td><strong>Instructor ID:</strong></td>
            <td>{{ $course->instructor_id }}</td>
        </tr>
        <tr>
            <td><strong>Status:</strong></td>
            <td>{{ ucfirst($course->status) }}</td>
        </tr>
        <tr>
            <td><strong>Image:</strong></td>
            <td>
                @if ($course->image_url)
                    <a href="{{ $course->image_url }}" target="_blank">View Image</a><br>
                    <img src="{{ $course->image_url }}" alt="Course Image" width="200" style="margin-top: 10px;">
                @else
                    N/A
                @endif
            </td>
        </tr>
    </table>

    <a href="{{ route('course.index') }}" class="back-link">← Back to Course List</a>

</body>
</html>