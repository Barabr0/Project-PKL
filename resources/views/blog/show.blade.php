<x-app-layout :imageNavbar="true">


{{-- 🔵 ARTIKEL DETAIL --}}
<section class="max-w-4xl mx-auto px-4 py-10">

    {{-- BACK BUTTON --}}
    <a href="{{ route('blog') }}" class="text-blue-600 text-sm font-semibold hover:underline mb-4 inline-block">
        ← Kembali ke Blog
    </a>

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        
        {{-- BANNER --}}
        <img src="{{ asset('storage/images/test.jpg') }}" 
            class="w-full h-64 md:h-96 object-cover" alt="{{ $content->judul }}">

        <div class="p-6 md:p-10">
            
            {{-- META --}}
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-4">
                <span>{{ $content->created_at->format('d M Y') }}</span>
                <span>•</span>
                <span>Admin</span>
            </div>

            {{-- TITLE --}}
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                {{ $content->judul }}
            </h1>

            {{-- CONTENT --}}
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed text-justify space-y-6">
                @if($content->deskripsi && $content->deskripsi != '-')
                    {!! nl2br(e($content->deskripsi)) !!}
                @else
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nunc velit, sollicitudin vel est sit amet, venenatis vulputate erat. Pellentesque eget lectus ac est elementum semper non vitae diam. In blandit, nunc sed laoreet mattis, orci lorem vehicula leo, et bibendum eros eros dictum lorem. Duis nec odio egestas, euismod massa id, iaculis orci. Aliquam feugiat maximus auctor. Quisque varius mi pellentesque, semper mauris a, faucibus neque. Aenean porta, tellus blandit laoreet bibendum, libero odio vestibulum nisi, iaculis bibendum est magna vitae ante. Sed porttitor, sem nec pharetra tempus, leo justo rutrum dolor, a ullamcorper nunc turpis eu nulla. Fusce sapien lorem, lobortis ac placerat a, condimentum id nibh. Sed sed nisi nec ipsum scelerisque convallis. Curabitur tortor sem, blandit eu justo quis, vestibulum lacinia massa.
                    </p>
                    <p>
                        Nulla a bibendum arcu. Ut blandit, nibh et tincidunt pulvinar, ligula risus ornare velit, vel iaculis augue nulla eget nisl. Vivamus nec tempor tellus, ut sagittis mi. Fusce eu ligula sollicitudin, viverra neque at, auctor arcu. Nunc risus dolor, dignissim fermentum orci in, consequat sagittis quam. Pellentesque vel felis est. Maecenas vulputate sem in justo rhoncus scelerisque. Curabitur eget elit quis libero egestas posuere. Nam nec lorem tincidunt, suscipit nibh vitae, finibus augue.
                    </p>
                @endif
            </div>

        </div>

    </div>

</section>

{{-- FOOTER --}}
</x-app-layout>
