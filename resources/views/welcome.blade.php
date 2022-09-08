<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
    <div class="container mx-auto">
      <form>
        <div class="mb-2">
          <label class="block mb-2 text-xl"> Title </label>
          <input
            type="text"
            class="
              w-full
              px-4
              py-2
              text-sm
              border
              rounded-md
              focus:border-blue-400
              focus:outline-none
              focus:ring-1
              focus:ring-blue-600
            "
            placeholder="Title"
          />
        </div>
        <div class="mt-8">
          <label class="block mb-2 text-xl">Description </label>
          <textarea name="description" class="bg-gray-500 "> </textarea>
        </div>
        <button
          class="
            px-4
            py-2
            mt-4
            text-sm text-white
            bg-blue-600
            rounded-lg
            hover:bg-blue-700
          "
        >
          Submit
        </button>
      </form>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace('description');
    </script>
  </h1>
</body>
</html>