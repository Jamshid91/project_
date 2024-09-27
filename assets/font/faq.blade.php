<section data-section="faq">
    <div class="container max-w-[1300px] mx-auto py-14 md:py-16 lg:py-[100px] px-4">
        <h2 class="text-lab-pr text-title-1 md:text-[36px] lg:text-[48px] font-bold mb-8 leading-none">
            Ответы на часто <br> задаваемые вопросы
        </h2>
        <div class="block">
            <div class="bg-fill-qt rounded-2xl overflow-hidden">
                @php
                    $faqList = config('faq.homepage');
                @endphp

                @foreach ($faqList as $faqItem)
                    <div class="block {{ (empty($loop->last)) ? 'border-b border-fill-pr' : ''}}">
                        <div class="flex justify-between p-6 cursor-pointer space-x-4" data-accordion="header">
                            <h4 class="text-par-m sm:text-par-l lg:text-title-3 font-medium text-lab-pr2">
                                {{ $faqItem['title'] }}
                            </h4>
                            <div class="flex-shrink-0">
                                <button class="size-6 lg:size-8 text-lab-sc ease-in-out duration-300">
                                    <svg class="size-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-6 text-par-m text-lab-pr2 pb-6 accordion-body" data-accordion="body" style="display: none;">
                            <div class="w-10/12">
                                {{ $faqItem['body'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>