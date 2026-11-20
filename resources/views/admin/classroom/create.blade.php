<x-admin.layout>
    <section class="mx-auto max-w-xl rounded-lg bg-white p-6 shadow dark:bg-gray-800">
        <h1 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Tambah Classroom</h1>
        @if ($errors->any())<div class="mb-4 text-red-600 dark:text-red-400" role="alert">{{ $errors->first() }}</div>@endif
        <form action="{{ route('admin.classrooms.store') }}" method="POST" class="space-y-4">
            @csrf
            <div><label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama kelas</label><input id="name" name="name" value="{{ old('name') }}" required maxlength="50" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"></div>
            <div><label for="major" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jurusan</label><input id="major" name="major" value="{{ old('major') }}" required maxlength="50" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"></div>
            <button class="rounded bg-blue-600 px-4 py-2 text-white">Simpan</button>
            <a href="{{ route('admin.classrooms.index') }}" class="ml-2 text-blue-600">Batal</a>
        </form>
    </section>
</x-admin.layout>
