<x-admin.layout>
    <section class="mx-auto max-w-xl rounded-lg bg-white p-6 shadow dark:bg-gray-800">
        <h1 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Tambah Teacher</h1>
        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-700" role="alert">
                {{ $errors->first() }}
            </div>
        @endif
        <form action="{{ route('admin.teachers.store') }}" method="POST" class="space-y-4">
            @csrf
            <div><label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama guru</label><input id="name" name="name" value="{{ old('name') }}" required class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"></div>
            <div><label for="niy" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">NIY</label><input id="niy" name="niy" value="{{ old('niy') }}" required type="number" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"></div>
            <div><label for="subjects_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Subject</label><select id="subjects_id" name="subjects_id" required class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white"><option value="">Pilih subject</option>@foreach ($subjects as $subject)<option value="{{ $subject->id }}" @selected(old('subjects_id') == $subject->id)>{{ $subject->name }}</option>@endforeach</select></div>
            <div><label for="start_date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tanggal mulai</label><input id="start_date" name="start_date" value="{{ old('start_date') }}" required type="date" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:[color-scheme:dark]"></div>
            <button class="rounded bg-blue-600 px-4 py-2 text-white">Simpan</button>
            <a href="{{ route('admin.teachers.index') }}" class="ml-2 text-blue-600">Batal</a>
        </form>
    </section>
</x-admin.layout>
