<x-layout>
    <form method="POST" action="create/store" enctype="multipart/form-data">
        @csrf
        <input name='title' type="text">
        <input name='body' type="text">

        <button type="submit">Submit</button>
    </form>
</x-layout>
