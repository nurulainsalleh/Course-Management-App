<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Edit Course</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f7fa;
      margin: 0;
      padding: 2rem;
      color: #333;
    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
    }

    form {
      width: 90%;
      max-width: 600px;
      margin: auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }

    div {
      margin-bottom: 1.25rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="url"],
    textarea,
    select {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      box-sizing: border-box;
      background-color: #fefefe;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    button {
      background-color: #007bff;
      color: #fff;
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 2rem;
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    a:hover {
      color: #0056b3;
    }
  </style>
</head>
<body>
  <h1>Edit Course</h1>

  <form method="POST" action="{{ route('course.update', $course->id) }}">
    @csrf
    @method('PUT')

    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="{{ old('title', $course->title) }}" required>
    </div>

    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description">{{ old('description', $course->description) }}</textarea>
    </div>

    <div>
      <label for="price">Price</label>
      <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $course->price) }}" required>
    </div>

    <div>
      <label for="instructor_id">Instructor ID</label>
      <input type="number" name="instructor_id" id="instructor_id" value="{{ old('instructor_id', $course->instructor_id) }}" required>
    </div>

    <div>
      <label for="status">Status</label>
      <select name="status" id="status" required>
        <option value="active" {{ old('status', $course->status) === 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ old('status', $course->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
      </select>
    </div>

    <div>
      <label for="image_url">Image URL</label>
      <input type="url" name="image_url" id="image_url" value="{{ old('image_url', $course->image_url) }}">
    </div>

    <div style="text-align: center;">
      <button type="submit">Update Course</button>
    </div>
  </form>

  <a href="{{ route('course.index') }}">← Back to Course List</a>
</body>
</html>
