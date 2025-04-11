<aside id="container-sidebar-filter" class="hidden left-0 top-0 w-full h-full bg-black/40 z-[999]">
    <div id="sidebar-filter" class="max-sm:w-full sm:w-96 h-full bg-white max-sm:border-none sm:border-r">
        <div class="p-[20px] border-b flex justify-between items-center">
            <div class="flex flex-row items-center gap-x-2">
                <h1 class="text-card-dark font-bold text-xl">
                    Filter Faqs
                </h1>
                <i class="ri-filter-2-line text-2xl"></i>
            </div>
            <button id="close-sidebar-filter" type="button"
                class="py-1 px-2 rounded hover:bg-gray-100 cursor-pointer transition">
                <i class="ri-close-line text-xl"></i>
            </button>
        </div>
        <div class="p-[20px]">
            <form action="{{ route('dashboard.faqs.index') }}" method="GET" class="h-full flex flex-col gap-y-6">
                <div class="flex flex-col gap-y-2">
                    <label for="search" class="font-medium text-card-dark/60">Search</label>
                    <input type="text" class="outline-none p-2 border-2 rounded-lg" id="search" name="search"
                        placeholder="Search by Question" value="{{ request('search') }}">
                </div>
                <div class="flex flex-col gap-y-2">
                    <label for="category" class="font-medium text-card-dark/60">Category</label>
                    <select name="category" id="category" class="outline-none p-2 border-2 rounded-lg"
                        class="font-semibold">
                        <option value="all" class="font-medium text-card-dark"
                            @if (request('category') == 'all') selected @endif>
                            All
                        </option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" class="font-medium text-card-dark"
                                @if (request('category') == $category->id) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit"
                    class="text-white font-semibold bg-blue-500 hover:bg-blue-500/90 transition py-2.5 px-3 rounded-[3px]">Apply</button>
            </form>
        </div>
    </div>
</aside>
