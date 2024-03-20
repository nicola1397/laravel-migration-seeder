@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Laravel Trains</h1>
<!-- TRAINS TABLE -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Compagnia</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di arrivo</th>
      <th scope="col">Orario di partenza</th>
      <th scope="col">Orario di arrivo</th>
      <th scope="col">Codice treno</th>
      <th scope="col">Numero Carrozze</th>
      <th scope="col">In orario</th>
      <th scope="col">Cancellato</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($trains as $train)
    <tr>
      <th scope="row">{{ $train->id }}</th>
      <td>{{ $train->company }}</td>
      <td>{{ $train->departure_from }}</td>
      <td>{{ $train->arrival_in }}</td>
      <td>{{ $train->time_of_departure }}</td>
      <td>{{ $train->time_of_arrival }}</td>
      <td>{{ $train->train_Code }}</td>
      <td>{{ $train->coaches }}</td>
      <td>{{ $train->in_time }}</td>
      <td>{{ $train->canceled }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
  </section>
@endsection
