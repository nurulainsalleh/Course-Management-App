<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit a Course</h1>

    <form method="POST" action="{{ route('course.update', $course->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $course->title) }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ old('description', $course->description) }}</textarea>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $course->price) }}" required>
        </div>

        <div>
            <label for="instructor_id">Instructor ID:</label>
            <input type="number" name="instructor_id" id="instructor_id" value="{{ old('instructor_id', $course->instructor_id) }}" required>
        </div>

        <div>
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="active" {{ old('status', $course->status) === 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $course->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <div>
            <label for="image_url">Image URL:</label>
            <input type="url" name="image_url" id="image_url" value="{{ old('image_url', $course->image_url) }}">
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>

    <a href="{{ route('course.index') }}">← Back to Course List</a>
</body>
</html>
