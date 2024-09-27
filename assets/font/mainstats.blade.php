<section>
    <div class="container mx-auto max-w-[1300px] py-14 md:py-16 lg:py-[100px] px-4">
        <h2 class="text-lab-pr text-title-1 md:text-[36px] lg:text-[48px] font-bold mb-8 leading-none">
            Общая статистика
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="block">
                <div class="bg-lab-pr rounded-lg p-6 lg:p-8 h-full">
                    <h4 class="text-[56px] md:text-[84px] lg:text-[130px] font-bold tracking-[-0.06em] leading-none text-white">
                        {{ $mainStats['completedChallenges'] }}%
                    </h4>
                    <p class="text-par-l lg:text-title-3 space-x-2 font-medium text-white leading-6 tracking-tight mb-20">
                        Челленджей <br> завершаются успешно
                    </p>

                    <p class="text-par-m opacity-80 text-white w-10/12">
                        Наш подход ориентирован на создание конкретных и измеримых результатов, которые вы можете наблюдать и оценивать.
                    </p>
                </div>
            </div>
            <div class="block">
                <div class="bg-fill-qt rounded-lg p-6 lg:p-8 h-full">
                    <h4 class="text-[56px] md:text-[84px] lg:text-[130px] font-bold tracking-[-0.06em] leading-none text-lab-pr">
                        {{ $mainStats['completedHabits'] }}%
                    </h4>
                    <p class="text-par-l lg:text-title-3 space-x-2 font-medium text-lab-pr2 leading-6 tracking-tight mb-20">
                        Привычек <br> успешно внедряются
                    </p>

                    <p class="text-par-m opacity-80 text-par w-10/12">
                        Регулярно оцениваем результаты и корректируем наши подходы для достижения лучших результатов.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>