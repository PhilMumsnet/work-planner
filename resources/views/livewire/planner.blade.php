<div>
    <h1>Planner</h1>
    @foreach ($weeks as $week)
        <div>{{ $week->start_date->toFormattedDateString() }}</div>
    @endforeach
</div>
