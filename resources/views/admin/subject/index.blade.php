<x-admin.layout>
    <section class="bg-gray-50 p-4 dark:bg-gray-900 sm:p-6">
        <div class="mx-auto max-w-5xl">
            @if (session('success'))
                <div class="mb-5 rounded-lg bg-green-100 p-4 text-sm text-green-800" role="status">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Subjects</h1>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Daftar mata pelajaran dan guru pengampu.</p>
                </div>
                <a href="{{ route('admin.subjects.create') }}"
                    class="inline-flex items-center justify-center rounded-lg bg-blue-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700">
                    <svg class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Tambah Subject
                </a>
            </div>

            <div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-600 dark:text-gray-300">
                        <thead class="bg-gray-100 text-xs uppercase tracking-wide text-gray-700 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-4">Mata pelajaran</th>
                                <th scope="col" class="px-6 py-4">Guru pengampu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subjects as $subject)
                                <tr class="border-t border-gray-200 dark:border-gray-700">
                                    <th scope="row" class="whitespace-nowrap px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        {{ $subject->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        @forelse ($subject->teachers as $teacher)
                                            <div>{{ $teacher->name }}</div>
                                        @empty
                                            <span class="text-gray-500 dark:text-gray-400">Belum ada guru pengampu</span>
                                        @endforelse
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="px-6 py-10 text-center text-gray-500 dark:text-gray-400">
                                        Belum ada data subject.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="border-t border-gray-200 px-6 py-3 text-sm text-gray-500 dark:border-gray-700 dark:text-gray-400">
                    Total: {{ $subjects->count() }} subject
                </div>
            </div>
        </div>
    </section>
</x-admin.layout>
