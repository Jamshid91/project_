@if(session()->has('sessionMessage'))

    @php $sessionMessage = session('sessionMessage'); @endphp

    @if ($sessionMessage['type'] == 'error') 
        <div class="p-4 bg-red-500 mb-8">
            <div class="container mx-auto max-w-[1300px] px-4">
                <div class="flex">
                    <span class="flex-shrink-0 size-6">
                        <svg class="size-full text-white" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM12 7C11.4477 7 11 7.44772 11 8C11 8.55228 11.4477 9 12 9H12.01C12.5623 9 13.01 8.55228 13.01 8C13.01 7.44772 12.5623 7 12.01 7H12ZM13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12V16C11 16.5523 11.4477 17 12 17C12.5523 17 13 16.5523 13 16V12Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <span class="flex-1 text-white text-par-m ml-4">
                        {{ $sessionMessage['content'] }}
                    </span>
                </div>
            </div>
        </div>
    @elseif($sessionMessage['type'] == 'success')
        <div class="p-4 bg-green-500 mb-8">
            <div class="container mx-auto max-w-[1300px] px-4">
                <div class="flex">
                    <span class="flex-shrink-0 size-6">
                        <svg class="size-full text-white" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM17.2071 9.70711C17.5976 9.31658 17.5976 8.68342 17.2071 8.29289C16.8166 7.90237 16.1834 7.90237 15.7929 8.29289L10.5 13.5858L8.20711 11.2929C7.81658 10.9024 7.18342 10.9024 6.79289 11.2929C6.40237 11.6834 6.40237 12.3166 6.79289 12.7071L9.79289 15.7071C10.1834 16.0976 10.8166 16.0976 11.2071 15.7071L17.2071 9.70711Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <span class="flex-1 text-white text-par-m ml-4">
                        {{ $sessionMessage['content'] }}
                    </span>
                </div>
            </div>
        </div>
    @endif

    @if (isset($sessionMessage['closeModal']))
        <script>
            localStorage.removeItem('applyModalOpen');
        </script>
    @endif
@endif