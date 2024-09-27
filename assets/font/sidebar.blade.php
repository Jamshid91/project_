<aside style="right: -340px;" class="sidebar-menu bg-bg-pr fixed top-0 bottom-0 bg-[#FCFCFD] overflow-y-auto shadow-2xl z-10 transition-all duration-300 ease-in-out z-20" id="mobile-sidebar">
    <div class="h-full flex flex-col">
        <div class="flex justify-between bg-bg-pr py-6 px-4 border-b border-fill-qt">
            <a href="{{ route('front.home') }}">
                <img class="h-5" src="{{ asset('logo.png') }}" alt="Logo">
            </a>
            <button class="text-par-s text-blue-900" data-sidebar="close">
                Закрыть
            </button>
        </div>
        <div class="py-2 px-4">
            <div class="mb-8 divide-y divide-fill-pr">
                <a class="block text-par-l py-3" href="{{ route('front.challenges') }}">
                    Челленджи
                </a>
                <a class="block text-par-l py-3" href="{{ route('front.habits') }}">
                    Привычки
                </a>
                <a class="block text-par-l py-3" href="{{ route('front.competitions') }}">
                    Турниры
                </a>
                <a class="block text-par-l py-3" href="{{ route('front.teams') }}">
                    Команды
                </a>
            </div>
            <div class="mb-8 divide-y divide-fill-pr">
                <a class="block text-par-s py-3" href="{{ route('front.media') }}">
                    Медиа
                </a>
                <a class="block text-par-s py-3" href="{{ route('front.affiliate') }}">
                    Партнерская программа
                </a>
                <a class="block text-par-s py-3" href="{{ route('front.home', ['section' => 'tariffs']) }}">
                    Тарифы
                </a>
                <a class="block text-par-s py-3" href="{{ route('front.contacts') }}">
                    Контакты
                </a>
            </div>
            <div class="divide-y divide-fill-pr">
                <a class="block text-par-s py-3" href="{{ config('contacts.instagram') }}">
                    Инстаграм
                </a>
                <a class="block text-par-s py-3" href="{{ config('contacts.vk') }}">
                    Вконтакте
                </a>
                <a class="block text-par-s py-3" href="{{ config('contacts.youtube') }}">
                    Ютуб
                </a>
            </div>
        </div>
    </div>
</aside>