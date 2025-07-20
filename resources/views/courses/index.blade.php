<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Course Management List</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      background: linear-gradient(to right, #f0f4f8, #e8f0fe);
      padding: 40px 20px;
      color: #333;
    }

    h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 30px;
      color: #2c3e50;
    }

    .container {
      max-width: 1100px;
      margin: auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.08);
      padding: 30px;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 15px;
      text-align: left;
    }

    th {
      background-color: #2c3e50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
      transition: background 0.3s;
    }

    img {
      width: 80px;
      height: auto;
      border-radius: 8px;
      object-fit: cover;
    }

    a {
      color: #3498db;
      text-decoration: none;
      margin-right: 8px;
      transition: color 0.2s ease;
    }

    a:hover {
      color: #1d6fa5;
    }

    button {
      background: none;
      border: none;
      color: #e74c3c;
      cursor: pointer;
      font-weight: 500;
    }

    button:hover {
      text-decoration: underline;
    }

    .success-message {
      background: #d4edda;
      color: #155724;
      padding: 10px 15px;
      border-left: 5px solid #28a745;
      margin-bottom: 20px;
      border-radius: 4px;
    }

    .create-button {
      display: inline-block;
      margin-top: 30px;
      padding: 12px 24px;
      background-color: #2ecc71;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .create-button:hover {
      background-color: #27ae60;
    }

    @media (max-width: 768px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      thead {
        display: none;
      }

      tr {
        margin-bottom: 15px;
        background: #fff;
        border-radius: 6px;
        padding: 10px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
      }

      td {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        border-bottom: 1px solid #eee;
      }

      td::before {
        content: attr(data-label);
        font-weight: 600;
        flex-basis: 50%;
        color: #555;
      }

      td:last-child {
        border-bottom: none;
      }

      .create-button {
        display: block;
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <h1>📚 Course Management List</h1>

  <div class="container">
    @if (session('success'))
      <div class="success-message">{{ session('success') }}</div>
    @endif

    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Price</th>
          <th>Instructor</th>
          <th>Status</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($courses as $course)
        <tr>
          <td data-label="Title">{{ $course->title }}</td>
          <td data-label="Description">{{ $course->description }}</td>
          <td data-label="Price">RM {{ number_format($course->price, 2) }}</td>
          <td data-label="Instructor ID">{{ $course->instructor_id }}</td>
          <td data-label="Status">{{ ucfirst($course->status) }}</td>
          <td data-label="Image">
            @if ($course->image_url)
              <img src="{{ $course->image_url }}" alt="Course Image" />
            @else
              N/A
            @endif
          </td>
          <td data-label="Actions">
            <a href="{{ route('course.show', $course->id) }}">View</a>
            <a href="{{ route('course.edit', $course->id) }}">Edit</a>
            <form method="POST" action="{{ route('course.destroy', $course->id) }}" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this course?');">
              @csrf
              @method('DELETE')
              <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="7" style="text-align: center;">No courses available.</td>
        </tr>
        @endforelse
      </tbody>
    </table>

    <a href="{{ route('course.create') }}" class="create-button">➕ Create New Course</a>
  </div>

</body>
</html>
