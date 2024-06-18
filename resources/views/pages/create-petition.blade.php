<x-layout>
    <div class="w-4/5 mx-auto p-3 shadow-md rounded-md">
        <a href=""><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        <h3 class="text-xl font-semibold mt-8 mb-5 border-b-2 border-b-black pb-2">Buat Petisi</h3>
        <form action="" method="post">
            <div class="mb-5">
                <label for="title-petition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Petisi</label>
                <input type="text" id="title-petition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="mb-5">
                    <label for="topic" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topik</label>
                    <input type="text" id="topic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi (Kota)</label>
                    <input type="text" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="mb-5">
                    <label for="petition-maker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembuat Petisi</label>
                    <input type="text" id="petition-maker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="addressed-the-petition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tertuju untuk</label>
                    <input type="text" id="addressed-the-petition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="email-petition-maker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email aktif pembuat</label>
                    <input type="email" id="email-petition-maker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Petisi</label>
                <div id="petition-desc">
                    <textarea name="" id="description"></textarea>
                </div>
            </div>
            <div class="flex items-center mb-5">
                <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                <label for="checkbox-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saya setuju dengan<a href="#" class="text-blue-600 hover:underline dark:text-blue-500">syarat dan perjanjian,</a>.</label>
            </div>
            <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Publikasi</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script>
        const quill = new Quill('#petition-desc', {
            placeholder: 'Deskripsi',
            theme: 'snow'
        });
    </script>
</x-layout>