<header class="block mb-6">
    <div class="border-b border-fill-sc">
        <div class="container mx-auto max-w-[1300px] py-5 px-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{ route('front.home') }}">
                        <img class="h-5" src="{{ asset('logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="hidden lg:flex ml-12 flex-1">
                    <div class="flex space-x-6">
                        <a class="text-par-m text-lab-pr2" href="{{ route('front.home') }}">
                            Главная
                        </a>
                        <a class="text-par-m text-lab-pr2" href="{{ route('front.media') }}">
                            Медиа
                        </a>
                        <a class="text-par-m text-lab-pr2" href="{{ route('front.affiliate') }}">
                            Партнерская программа
                        </a>
                        <a class="text-par-m text-lab-pr2" href="{{ route('front.home', ['section' => 'tariffs']) }}">
                            Тарифы
                        </a>
                        <a class="text-par-m text-lab-pr2" href="{{ route('front.contacts') }}">
                            Контакты
                        </a>
                        @is_admin
                            <a class="text-par-m text-lab-pr2" href="{{ route('cabinet.cabinet') }}">
                                Админка
                            </a>
                        @end_is_admin
                    </div>
                </div>
                
                <div class="ml-auto">
                    <div class="relative group">
                        <button class="flex items-center">
                            <span class="text-par-m text-lab-pr2 cursor-pointer">
                                @if(get_gender() == 'male')
                                    Мужчины
                                @else
                                    Женщины
                                @endif
                            </span>
                            <span class="size-4 text-lab-sc ml-1">
                                <svg class="size-full" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.083 5.24992L7.70678 8.62614C7.31626 9.01667 6.68309 9.01667 6.29257 8.62614L2.91634 5.24992" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </button>
                        <ul class="hidden group-hover:block py-2 bg-bg-pr shadow-xl absolute top-full right-0 rounded-md z-10 min-w-44">
                            <li class="block hover:bg-fill-sc px-4 py-2 cursor-pointer">
                                <a class="block text-par-m text-lab-pr2" href="{{ route('front.set.gender', 'male') }}">
                                    Мужчины
                                </a>
                            </li>
                            <li class="block hover:bg-fill-sc px-4 py-2 cursor-pointer">
                                <a class="block text-par-m text-lab-pr2" href="{{ route('front.set.gender', 'female') }}">
                                    Женщины
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <button class="w-7 space-y-1 lg:hidden ml-6" data-sidebar="open">
                        <span class="h-0.5 bg-lab-sc w-full block"></span>
                        <span class="h-0.5 bg-lab-sc w-full block"></span>
                        <span class="h-0.5 bg-lab-sc w-full block"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div>
    <div class="border-b border-fill-sc">
        <div class="container mx-auto max-w-[1300px] py-5 px-4">
            <div class="flex items-center">
                <div class="flex flex-wrap gap-2 lg:gap-4">
                    <div class="relative group">
                        <button class="flex items-center border border-fill-pr p-1 rounded-full pr-4">
                            <span class="size-8 lg:size-10 rounded-full flex-shrink-0 bg-fill-sc inline-flex-center">
                                <img class="w-4 lg:w-6" src="{{ asset('statics/emojies/dart.png') }}" alt="Emoji">
                            </span>
                            <span class="ml-2 text-cap-l lg:text-par-m text-lab-pr2 cursor-pointer">
                                Результаты участников
                            </span>
                            <span class="size-4 text-lab-sc ml-1">
                                <svg class="size-full" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.083 5.24992L7.70678 8.62614C7.31626 9.01667 6.68309 9.01667 6.29257 8.62614L2.91634 5.24992" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </button>
                        <ul class="hidden group-hover:block py-2 bg-bg-pr shadow-xl absolute top-full left-0 rounded-md z-10 min-w-44">
                            <li class="block hover:bg-fill-sc px-4 py-2 cursor-pointer">
                                <a class="block text-par-m text-lab-pr2" href="{{ route('front.challenges') }}">
                                    Челленджи
                                </a>
                            </li>
                            <li class="block hover:bg-fill-sc px-4 py-2 cursor-pointer">
                                <a class="block text-par-m text-lab-pr2" href="{{ route('front.habits') }}">
                                    Привычки
                                </a>
                            </li>
                            <li class="block hover:bg-fill-sc px-4 py-2 cursor-pointer">
                                <a class="block text-par-m text-lab-pr2" href="{{ route('front.competitions') }}">
                                    Турниры
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a  class="-order-1 md:order-none inline-flex items-center py-1 pl-5 pr-4 rounded-full border border-fill-pr" href="{{ route('front.participants', ['country' => config('countries.default_country')]) }}">
                        @if ($featuredParticipants)
                            <span class="inline-flex">
                                @foreach ($featuredParticipants as $i)
                                    <span class="size-8 lg:size-10 overflow-hidden rounded-full border-2 border-fill-sc -ml-4">
                                        <img class="w-full" src="{{ $i->getAvatar() }}" alt="Avatar">
                                    </span>
                                @endforeach
                            </span>
                        @endif
                        <span class="ml-2 text-cap-l lg:text-par-m text-lab-pr2">
                            Участники
                        </span>
                        <span class="ml-4 text-par-s font-medium text-lab-pr2 tracking-tighter bg-fill-pr px-1.5 rounded-full">
                            {{ $totalParticipants }}+
                        </span>
                    </a>
                </div>
                <div class="hidden lg:block ml-auto">
                    <a class="bg-blue-900 text-white py-3 px-6 rounded-full text-par-m tracking-tight" href="{{ route('front.home', ['section' => 'tariffs']) }}">
                        Записаться
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>