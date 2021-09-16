@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
					<div class="row">
					 <div class="col-6" style="border: solid light 1px; padding: 2px;">
					    <div class="row">
						  <div class="col-12"><h5>Sugar</h5></div>
						</div>
						<div class="row">
						  <div class="col-12">
						   <img  class="img-fluid" alt="Responsive image" src="img/sugar.jpg" alt="">
						 </div>
						</div>
						<br>
						<div class="row">
						 <div class="col-8">
						   <h4>$ 2</h4>
						 </div>
						 
						 <div class="col-4">
						   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-success">
										{{ __('Buy') }}
									</button>
								</div>
							</div>
						 </div>
						 
						</div>
					  
					 </div>
					 
					 
					 
					 <div class="col-6" style="border: solid light 1px; padding: 2px;">
					    <div class="row">
						  <div class="col-12"><h5>salt</h5></div>
						</div>
						<div class="row">
						  <div class="col-12">
						   <img  class="img-fluid" alt="Responsive image" src="img/salt.jpg" alt="">
						 </div>
						</div>
						<br>
						<div class="row">
						 <div class="col-8">
						   <h4>$ 0.4</h4>
						 </div>
						 
						 <div class="col-4">
						   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-success">
										{{ __('Buy') }}
									</button>
								</div>
							</div>
						 </div>
						 
						</div>
					  
					 </div>				
					
					
					
					</div>
					
					
					<br>
					<div class="row">
					 <div class="col-6" style="border: solid light 1px; padding: 2px;">
					    <div class="row">
						  <div class="col-12"><h5>Milk</h5></div>
						</div>
						<div class="row">
						  <div class="col-12">
						   <img  class="img-fluid" alt="Responsive image" src="img/milk.jpg" alt="">
						 </div>
						</div>
						<br>
						<div class="row">
						 <div class="col-8">
						   <h4>$ 1.5</h4>
						 </div>
						 
						 <div class="col-4">
						   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-success">
										{{ __('Buy') }}
									</button>
								</div>
							</div>
						 </div>
						 
						</div>
					  
					 </div>
					 
					 
					 
					 <div class="col-6" style="border: solid light 1px; padding: 2px;">
					    <div class="row">
						  <div class="col-12"><h5>wheatflour</h5></div>
						</div>
						<div class="row">
						  <div class="col-12">
						   <img  class="img-fluid" alt="Responsive image" src="img/wheatflour.jpg" alt="">
						 </div>
						</div>
						<br>
						<div class="row">
						 <div class="col-8">
						   <h4>$ 2</h4>
						 </div>
						 
						 <div class="col-4">
						   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-success">
										{{ __('Buy') }}
									</button>
								</div>
							</div>
						 </div>
						 
						</div>
					  
					 </div>
					 
					 
					 
				   </div> 
				   
				   <br>
					<div class="row">
					 <div class="col-6" style="border: solid light 1px; padding: 2px;">
					    <div class="row">
						  <div class="col-12"><h5>Maize Flour</h5></div>
						</div>
						<div class="row">
						  <div class="col-12">
						   <img  class="img-fluid" alt="Responsive image" src="img/mflour.jpg" alt="">
						 </div>
						</div>
						<br>
						<div class="row">
						 <div class="col-8">
						   <h4>$ 1.5</h4>
						 </div>
						 
						 <div class="col-4">
						   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-success">
										{{ __('Buy') }}
									</button>
								</div>
							</div>
						 </div>
						 
						</div>
					  
					 </div>
					 
					 
					 
					 <div class="col-6" style="border: solid light 1px; padding: 2px;">
					    <div class="row">
						  <div class="col-12"><h5>Cooking Oil</h5></div>
						</div>
						<div class="row">
						  <div class="col-12">
						   <img  class="img-fluid" alt="Responsive image" src="img/cookingoil.jpg" alt="">
						 </div>
						</div>
						<br>
						<div class="row">
						 <div class="col-8">
						   <h4>$ 2.35</h4>
						 </div>
						 
						 <div class="col-4">
						   <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-success">
										{{ __('Buy') }}
									</button>
								</div>
							</div>
						 </div>
						 
						</div>
					  
					 </div>
					 
					 
					 
				   </div> 
					
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
