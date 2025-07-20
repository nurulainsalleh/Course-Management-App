<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Course Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 px-4 py-8">

  <h1 class="text-3xl font-bold text-center mb-8">Course Details</h1>

  <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
    <table class="w-full">
      <tr class="border-b">
        <td class="p-4 font-semibold bg-gray-50 w-1/3">Title:</td>
        <td class="p-4">{{ $course->title }}</td>
      </tr>
      <tr class="border-b">
        <td class="p-4 font-semibold bg-gray-50">Description:</td>
        <td class="p-4">{{ $course->description }}</td>
      </tr>
      <tr class="border-b">
        <td class="p-4 font-semibold bg-gray-50">Price:</td>
        <td class="p-4">${{ number_format($course->price, 2) }}</td>
      </tr>
      <tr class="border-b">
        <td class="p-4 font-semibold bg-gray-50">Instructor ID:</td>
        <td class="p-4">{{ $course->instructor_id }}</td>
      </tr>
      <tr class="border-b">
        <td class="p-4 font-semibold bg-gray-50">Status:</td>
        <td class="p-4">{{ ucfirst($course->status) }}</td>
      </tr>
      <tr>
        <td class="p-4 font-semibold bg-gray-50">Image:</td>
        <td class="p-4">
          @if ($course->image_url)
            <a href="{{ $course->image_url }}" target="_blank" class="text-blue-600 underline hover:text-blue-800">View Image</a>
            <br />
            <img src="{{ $course->image_url }}" alt="Course Image" class="mt-2 rounded-lg w-48 h-auto" />
          @else
            <span class="text-gray-500 italic">N/A</span>
          @endif
        </td>
      </tr>
    </table>
  </div>

  <div class="text-center mt-6">
    <a href="{{ route('course.index') }}" class="text-blue-600 font-semibold hover:underline">← Back to Course List</a>
  </div>

</body>
</html>
