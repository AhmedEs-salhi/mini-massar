<x-layout title="my page">
    Hello
    @auth
        , {{ Auth::user()->name }}
    @endauth
    !
    <div>
        <h1>Your Courses:</h1>

        @php
            $user = Auth::user();
            $subjects = $user->subjects;
        @endphp
    </div>

    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th>Name</th>
                <th>Grade</th>
                <th>Note</th>
            </tr>
            </thead>
            <tbody>
            <!-- row 1 -->
            <tr class="bg-base-200">
            @foreach($subjects as $subject)
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
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
