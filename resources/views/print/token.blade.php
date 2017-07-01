@extends('...layouts/print')

@section('content')
                           
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Token Confirmation</h3>
            </div>
            
            <div class="panel-body">
            
                <table width="100%" class="table table-striped  table-hover">
                    <thead>
                        <th colspan="2">Jangan memberikan dokumen ini kepada siapapun</th>
                    </thead>
                    @foreach($tokens as $token)
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td>
                                : <strong>{{$token->name}}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>Token</td>   
                            <td>
                                : <strong>{{$token->token}}</strong>
                            </td>
                        </td>
                    <tbody>
                    <tfooter>
                        <th colspan="2"><span class="text-center">Token bersifat <strong><em>case sensitive</em></strong> (huruf kapital dan huruf kecil berbeda)</span></th>
                    </tfooter>
                @endforeach

            </table>
                
                <br/>
                <span align="center" class="text-info -align-center">School Name</span>
                <br/>
                <span align="center" class="text-info -align-center">Dicetak pada : {{date('Y / M /d - H : m : s')}}</span>
            </div>
        </div>
    </div>
@endsection