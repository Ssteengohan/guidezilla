<x-layout>
    <main class="mt-14">
        <div class="underline-offset-1">
            <div class="font text-2xl py-3  text-black dark:text-white">
                {{ ucfirst($post->title) }}
            </div>
            <div class="py-3 text-xl text-black dark:text-white">
                {!! $post->body !!}
            </div>
            <pre>
                <code>
                    {!! $post->code !!}
                </code>
            </pre>
        </div>
    </main>
</x-layout>
