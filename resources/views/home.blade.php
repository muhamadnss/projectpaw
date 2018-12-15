@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if(Auth::user()->jabatan == 'ADMIN')

                <div class="panel-body">
                    Halaman Admin!
                </div>
                @elseif(Auth::user()->jabatan == 'VENDOR')

                <div class="panel-body">
                    Halaman Vendor!
                </div>
                @else
                <div class="panel-body">
                    Halaman Member!
                    
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
