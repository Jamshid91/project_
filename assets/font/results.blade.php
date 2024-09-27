<section class="bg-lab-pr" data-section="par-results">
    <div class="container mx-auto max-w-[1300px] py-14 md:py-16 lg:py-[100px] px-4">
        <h2 class="text-white text-title-1 md:text-[36px] lg:text-[48px] font-bold mb-4 leading-none">
            Результаты наших<br>участников 
        </h2>
        <p class="text-par-l text-white opacity-60 mb-8">
            100+ участников уже присоединись
        </p>

        <div class="flex pl-6 mb-32">
            @if ($featuredParticipants)
                @foreach ($featuredParticipants as $i)
                    <div class="overflow-hidden rounded-full size-16 border-2 -ml-6 border-lab-pr2">
                        <img src="{{ $i->getAvatar() }}" alt="Image">
                    </div>
                @endforeach
            @endif

            <div class="overflow-hidden rounded-full size-16 bg-lab-pr2 text-white -ml-6 inline-flex-center">
                {{ $totalParticipants }}+
            </div>
        </div>

        <div class="grid gap-4 grid-cols-1 lg:grid-cols-2">
            <div class="block text-white mb-8 lg:mb-0">
                <h4 class="mb-2 text-par-s lg:text-par-l">
                    Статистика по челленджам
                </h4>
                <div class="grid grid-cols-2 gap-4">
                    <div class="block">
                        <strong class="block text-title-1 md:text-[46px] lg:text-[74px] lg:tracking-tighter leading-none">
                            {{ $totalProcessingChallenges }}
                        </strong>
                        <span class="block text-par-s lg:text-par-m opacity-60">
                            Выполнено
                        </span>
                    </div>
                    <div class="block">
                        <strong class="block text-title-1 md:text-[46px] lg:text-[74px] lg:tracking-tighter leading-none">
                            {{ $totalFailedChallenges }}
                        </strong>
                        <span class="block text-par-s lg:text-par-m opacity-60">
                            Провалено
                        </span>
                    </div>
                </div>
            </div>
            <div class="block text-white">
                <h4 class="mb-2 text-par-s lg:text-par-l">
                    Статистика по привычкам
                </h4>
                <div class="grid grid-cols-2 gap-4">
                    <div class="block">
                        <strong class="block text-title-1 md:text-[46px] lg:text-[74px] lg:tracking-tighter leading-none">
                            {{ $totalProcessingHabits }}
                        </strong>
                        <span class="block text-par-s lg:text-par-m opacity-60">
                            Выполнено
                        </span>
                    </div>
                    <div class="block">
                        <strong class="block text-title-1 md:text-[46px] lg:text-[74px] lg:tracking-tighter leading-none">
                            {{ $totalFailedHabits }}
                        </strong>
                        <span class="block text-par-s lg:text-par-m opacity-60">
                            Провалено
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>