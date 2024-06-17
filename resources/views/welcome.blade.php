<x-layout>
    

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-8 md:p-12 mb-8">
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">SuaraKita</h1>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Ini adalah platform untuk membuat petisi online, temukan isu yang salah dan berikan aspirasi mu.</p>
            <a href="{{ route('create-petition') }}" id="petition-start" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center border-4 border-indian-red text-indian-red bg-white hover:text-white ">
                Mulai buat petisi
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white dark:bg-gray-800 p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Mengapa harus SuaraKita ?</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">karena kami sudah terintegerasi dengan pihak yang berwenang sehingga pengajuan petisi anda akan lebih mudah didengar.</p>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">selain itu, website kami mudah, nyaman dan terbuka untuk digunakan</p>
                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Pelajari SuaraKita
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 p-8 md:p-12">
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Gabung komunitas dengan kami</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Kami membangun komunitas untuk mengkritisi kejadian kejadian atau isu yang panas agar mempunyai jalan keluarnya dengan adil</p>
                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Gabung sekarang
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
</x-layout>