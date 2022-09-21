@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1 class="py-5 fw-bold">Tabella dei treni</h1>
    <table>
        <thead>
            <th>Company</th>
            <th>From</th>
            <th>Destination</th>
            <th>Departure time</th>
            <th>Arrival time</th>
            <th>Train Code</th>
            <th>Wagons</th>
            <th>In time</th>
            <th>Canceled</th>
        </thead>
        <tbody>
            @forelse($trains as $train)
            <tr>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->destination }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->wagons }}</td>
                <td>{{ $train->is_in_time }}</td>
                <td>{{ $train->is_canceled }}</td>
            </tr>
            @empty
            <tr colspan="9">
                <td></td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection