<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Course</h1>
    <form method="post" action="{{ route('course.store') }}">
        @csrf 
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Course Title" required>         
        </div>      

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" placeholder="Course Description"></textarea>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" placeholder="Course Price" step="0.01" required>
        </div>

        <div>
            <label for="instructor_id">Instructor ID:</label>
            <input type="text" name="instructor_id" id="instructor_id" placeholder="Instructor ID" required>
        </div>

        <div>
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

        </div>      

        <div>
            <label for="image_url">Image URL:</label>
            <input type="text" name="image_url" id="image_url" placeholder="Image URL">
        </div>

        <div>
            <button type="submit">Create Course</button>
        </div>
    </form>
    <a href="{{ route('course.index') }}">Back to Course List</a>

</body>
</html>