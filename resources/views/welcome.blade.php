<x-layout title="my page">
    @php
        $user = Auth::user();
        $subjects = $user->subjects;
    @endphp
    <div class="text-4xl">
        Your Courses:
    </div>
    <x-table.layout>
        <x-table.head>
            <th>Name</th>
            <th>Mark</th>
            <th>Grade</th>
            <th>Note</th>
        </x-table.head>
        <x-table.body>
            @foreach($subjects as $subject)
            <x-table.row>
                    @if($subject->pivot->mark >= 10)
                        @php
                            $badge_style = 'success';
                            $cell_value = 'V';
                        @endphp
                    @else
                        @php
                            $badge_style = 'error';
                            $cell_value = 'NV';
                        @endphp
                    @endif
                    <td>{{ $subject->title }}</td>
                    <td>{{ $subject->pivot->mark }}/20</td>
                    <td><span class="badge badge-{{ $badge_style }}">{{ $cell_value }}</span></td>
                    <td>{{ $subject->pivot->note }}</td>
            </x-table.row>
            @endforeach
        </x-table.body>
    </x-table.layout>
</x-layout>
