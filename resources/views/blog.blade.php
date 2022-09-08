<x-layout>
    <main class="mt-14">
        <div class="underline-offset-1">
            <div
                class="font text-2xl mt-10 py-3  text-black dark:text-white">
                {{ ucfirst($post->title) }}
            </div>
            <div class="py-3 font-bold text-xl text-black dark:text-white">
                {{ strip_tags($post->body) }}
            </div>
        </div>
    </main>
</x-layout>
