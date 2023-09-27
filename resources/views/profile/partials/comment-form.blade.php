<section class="text-gray-600 body-font relative">
    <form method='post' action="{{ route('nomimatch.create_comment',$recruitment) }}">
        @csrf
        <div class="p-2 w-full md:w-4/5 flex justify-between">
            <label for="description" class="leading-7 text-sm text-gray-600">コメントフォーム</label>
            <button
                class="flex text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">送信</button>
        </div>
        <div class="p-2">
            <div class="relative">
                <textarea id="description" name="content"
                    class="w-full md:w-4/5 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
            </div>
        </div>

    </form>
</section>
