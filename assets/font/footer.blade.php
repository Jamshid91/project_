<footer class="bg-fill-qt pt-[50px]">
    <div class="container mx-auto max-w-[1300px] pb-[50px] px-4">
        <div class="block lg:flex">
            <div class="mb-6 lg:mb-0 lg:w-5/12">
                <div class="mb-6">
                    <img class="h-5" src="{{ asset('logo.png') }}" alt="Logo">
                </div>
                <p class="text-par-m text-lab-pr2 lg:mr-32">
                    Достигай целей играючи, Устраивай челленджи, Вырабатывай привычки, Соревнуйся, Обучайся, Пиши свою собственную историю успеха.
                </p>
            </div>
            <div class="lg:w-7/12">
                <div class="md:flex">
                    <div class="mb-6 md:mb-0 md:w-4/12">
                        <div class="mb-4 text-lab-pr2 text-par-l font-semibold">
                            Программа
                        </div>
                        <div class="space-y-2">
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.participants', ['country' => config('countries.default_country')]) }}">
                                Рейтинг
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.competitions') }}">
                                Турниры
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.challenges') }}">
                                Челленджи всех участников
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.habits') }}">
                                Привычки всех участников
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.teams') }}">
                                Команды
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.media-base') }}">
                                База знаний
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.media') }}">
                                Новости
                            </a>
                        </div>
                    </div>
                    <div class="mb-6 md:mb-0 md:w-4/12">
                        <div class="mb-4 text-lab-pr2 text-par-l font-semibold">
                            Информация
                        </div>
                        <div class="space-y-2">
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.home', ['section' => 'tariffs']) }}">
                                Тарифы
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.affiliate') }}">
                                Партнерская программа
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.faq') }}">
                                Вопрос-ответ
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ route('front.vacancies') }}">
                                Вакансии
                            </a>
                        </div>
                    </div>
                    <div class="mb-6 md:mb-0 md:w-4/12">
                        <div class="mb-4 text-lab-pr2 text-par-l font-semibold">
                            Соц-сети
                        </div>
                        <div class="space-y-2">
                            <a class="block text-par-m text-lab-pr2" href="{{ config('contacts.instagram') }}">
                                Инстаграм
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ config('contacts.vk') }}">
                                Вконтакте
                            </a>
                            <a class="block text-par-m text-lab-pr2" href="{{ config('contacts.youtube') }}">
                                Ютуб
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t border-fill-pr"></div>
    <div class="container mx-auto max-w-[1300px] py-4 px-4">
        <div class="lg:flex">
            <div class="mb-6 lg:mb-0 lg:w-5/12">
                <span class="text-par-m text-lab-pr2 mr-32">
                    {{ date('Y') }} TimeLift. Все права защищены.
                </span>
            </div>
            <div class="lg:w-7/12">
                <div class="space-y-2 lg:space-y-0 lg:flex lg:space-x-6">
                    <a class="block text-par-s text-lab-pr2" href="{{ route('front.privpol') }}">Политика конфиденциальности</a>
                    <a class="block text-par-s text-lab-pr2" href="{{ route('front.offerta') }}">Договор оферты</a>
                    <a class="block text-par-s text-lab-pr2" href="{{ route('front.contacts') }}">Контакты</a>
                </div>
            </div>
        </div>
    </div>
</footer>