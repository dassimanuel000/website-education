@extends('layouts.app')

@section('content')

@php
    use Illuminate\Support\Facades\DB;
@endphp
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12 body">
        @if (Auth::user()->email = 'admin')

        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Listes des messages</h3>
            </div>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Les Rendez-vous et Messaeges</h4>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <div class="table-responsive table-upgrade">
                              <table class="table">
                                <thead>
                                  <th>N*</th>
                                  <th>Client  </th>
                                  <th>email</th>
                                  <th>Tel</th>
                                  <th>Objet de la demande</th>
                                  <th>Messages</th>
                                  <th>Residence du demandeur</th>
                                  <th>Marquer comme lu</th>
                              </thead>
                              <tbody>
                                  @php
                                      $contact = DB::select('select * from contact where objet IS NULL ');
                                  @endphp
                                  @foreach ($contact as $item)
                                  <tr>
                                      <td>{{ $item->id }}</td>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->email }}</td>
                                      <td><strong>{{ $item->tel }}</strong></td>
                                      <td>{{ $item->objet }}</td>
                                      <td>{{ $item->message }}</td>
                                      <td>{{ $item->residence }}</td>
                                      <td>
                                          <a title="Life cm life-cm Life Cameroun Life market My space" href="/delete_contact/{{ $item->id }}" onclick="if(confirm('Avez vous deja appeler le client  ? ') == true){ return true; } else {return false}" class="btn btn-success btn-lg btn-block">Valider</a>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        @else
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        @endif
        </div>
    </div>
</div>
@endsection
