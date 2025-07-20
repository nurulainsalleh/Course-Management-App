<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Course</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f0f4ff, #ffffff, #e6eeff);
      margin: 0;
      padding: 40px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    h1 {
      font-size: 2.8rem;
      color: #2c3e50;
      margin-bottom: 20px;
      text-align: center;
    }

    form {
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    select {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
      font-size: 1rem;
      transition: border-color 0.3s;
    }

    input:focus,
    textarea:focus,
    select:focus {
      border-color: #4a90e2;
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    button[type="submit"] {
      background-color: #4a90e2;
      color: white;
      border: none;
      padding: 12px 25px;
      font-size: 1rem;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #357ab8;
    }

    .back-link {
      margin-top: 20px;
      display: inline-block;
      color: #4a90e2;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .back-link:hover {
      color: #357ab8;
    }

    .error {
      color: red;
      margin-bottom: 15px;
    }

    ul {
      padding-left: 20px;
    }
  </style>
</head>
<body>
  <h1>Create a Course</h1>

  @if ($errors->any())
    <div class="error">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="post" action="{{ route('course.store') }}">
    @csrf
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title" placeholder="Course Title" required>
    </div>

    <div>
      <label for="description">Description</label>
      <textarea name="description" id="description" placeholder="Course Description"></textarea>
    </div>

    <div>
      <label for="price">Price</label>
      <input type="number" name="price" id="price" placeholder="Course Price" step="0.01" required>
    </div>

    <div>
      <label for="instructor_id">Instructor ID</label>
      <input type="number" name="instructor_id" id="instructor_id" placeholder="Instructor ID" required>
    </div>

    <div>
      <label for="status">Status</label>
      <select name="status" id="status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>

    <div>
      <label for="image_url">Image URL</label>
      <input type="text" name="image_url" id="image_url" placeholder="Image URL">
    </div>

    <div>
      <button type="submit">Create Course</button>
    </div>
  </form>

  <a href="{{ route('course.index') }}" class="back-link">← Back to Course List</a>
</body>
</html>
