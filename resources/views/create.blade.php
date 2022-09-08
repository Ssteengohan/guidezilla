<x-layout>
    <form method="POST" action="create/store" enctype="multipart/form-data">
        @csrf
        <label class="block mb-2 text-xl text-black dark:text-white"> Title </label>
        <input name='title' type="text"
            class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600">
        <div class="mt-4">
            <label class="block mb-2 text-xl text-black dark:text-white">Body</label>
            <textarea name="body" class="bg-gray-500"> </textarea>
        </div>
        <div class="mt-4">
            <label class="block mb-2 text-xl text-black dark:text-white">Code</label>
            <textarea name="code" class="bg-gray-500"> </textarea>
        </div>

        <button type="submit"
            class="px-4 py-2 mt-4 text-sm text-white bg-blue-600 rounded-lg hover:bg-blue-700 mb-20">Submit</button>
    </form>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body');
        CKEDITOR.replace('code');
    </script>
</x-layout>
