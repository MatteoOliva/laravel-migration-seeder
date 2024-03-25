@extends('layouts.app')

@section('title', 'Trains')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Trains</h1>
      <table class="table">

        <thead>
          <tr>
            <th>id</th>
            <th>company</th>
            <th>departure_station</th>
            <th>arrival_station</th>
            <th>departure_time</th>
            <th>arrival_time</th>
            <th>train_code</th>
            <th>wagons_number</th>
            <th>on_time</th>
            <th>cancelled</th>
            <th>created_at</th>
            <th>updated_at</th>
          </tr>
          </thead>
          <tbody>
            @forelse($trains as $train)
          <tr>
            <td>{{$train->id}}</td>
            <td>{{$train->company}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_time}}</td>
            <td>{{$train->train_code}}</td>
            <td>{{$train->wagons_number}}</td>
            <td>{{$train->on_time}}</td>
            <td>{{$train->cancelled}}</td>
            <td>{{$train->created_at}}</td>
            <td>{{$train->updated_at}}</td>
          </tr>
            
            @empty
            nessun risultato trovato
            @endforelse
          </tbody>
</table>
    </div>
  </section>
@endsection
