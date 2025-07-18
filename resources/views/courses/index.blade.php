<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Management List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: left;
        }
        img {
            max-width: 100px;
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>

    <h1>Course Management List</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Instructor ID</th>
                <th>Status</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($courses as $course)
            <tr>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description }}</td>
                <td>${{ number_format($course->price, 2) }}</td>
                <td>{{ $course->instructor_id }}</td>
                <td>{{ ucfirst($course->status) }}</td>
                <td>
                    @if ($course->image_url)
                        <img src="{{ $course->image_url }}" alt="Course Image">
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    <a href="{{ route('course.show', $course->id) }}">View</a> |
                    <a href="{{ route('course.edit', $course->id) }}">Edit</a> |

                    <form method="POST" action="{{ route('course.destroy', $course->id) }}" onsubmit="return confirm('Are you sure you want to delete this course?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red;">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="7">No courses available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <br>

    <a href="{{ route('course.create') }}">Create New Course</a>

</body>
</html>
