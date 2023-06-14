<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind CSS Example</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom Styles */
    .custom-padding {
      padding: 1.042%;
    }
  </style>
</head>
<body>
  <div class="custom-padding">
    <div class="flex">
      <div class="w-28.125%">
        <!-- Content for the first column -->
        <div class="bg-gray-200 h-64"></div>
      </div>
      <div class="w-71.833% ml-1.042%">
        <!-- Content for the second column -->
        <div class="bg-gray-300 h-64"></div>
      </div>
    </div>
  </div>
</body>
</html>
