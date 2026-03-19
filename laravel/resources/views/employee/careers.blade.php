@extends('layouts.app')
@section('content')

<div class="container-fluid p-0 h-100">
        
        <div class="row m-0 g-0 h-100">
            
            <div class="col-12 p-0">
                
                <div class="bg"
                     style="background-image: url('{{ asset('images/Careers_Background.png') }}'); 
                            background-size: cover; 
                            background-position: center; 
                            background-repeat: no-repeat;
                            height: 100vh;
                            width: 100vw;">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 text-start p-5">     
                        <div class="d-flex flex-column h-100 text-center">
                            <h2 class="display-4 fw-bold text-white">
                                Become an Official AsiaCars Agent
                            </h2>
                            <h2 class="display-6 fw-bold text-danger">
                                Your Trusted Partner
                            </h2>
                        </div>
                    </div>     
                    
                </div>
            </div>
        </div>
    </div>

@endsection