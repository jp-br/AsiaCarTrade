@extends('layouts.app')
@section('content')

<div class="container-fluid p-0 h-100">
        
        <div class="row m-0 g-0 h-100">
            
            <div class="col-12 p-0">
                
                <div class="bg"
                     style="background-image: url('{{ asset('images/Careers_Background.png') }}'); 
                            background-size: cover; 
                            background-position: center center; 
                            background-repeat: no-repeat;
                            height: 100vh;
                            width: 100vw;">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 p-5">     
                        <div class="text-center mb-5" style="max-width: 780px;font-family: 'Poppins', sans-serif;">
                            <h2 class="display-6 fw-bold text-white mb-2 text-uppercase">   
                                Become an Official AsiaCars Agent
                            </h2>
                            <p class="display-10 fw-bold text-secondary mb-5">
                                Earn commissions by helping customers buy, sell, and trade cars. Enjoy a flexible work schedule that fits your lifestyle. Receive legitimate certification to boost your credibility. Unlock real opportunities to grow and earn. Join a supportive team and start your journey today!
                            </p>
                            <button type="button" class="btn btn-apply">Apply As Agent</button>
                        </div>
                    </div>     
                    
                </div>
            </div>
        </div>
    </div>

@endsection